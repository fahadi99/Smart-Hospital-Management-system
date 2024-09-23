<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\UserPreferences;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public static function AvatarImage()
    {
        return 'src/media/users/';
    }

    public static function getForSelectData()
    {
        return self::pluck('name', 'id')->toArray();
    }

    public static function getById($id)
    {
        return self::find($id);
    }


    public static function getAll()
    {
        $request = request();

        $search['q'] = $request->has('q') ? $request->get('q') : false;
        $search['status'] = $request->has('status') ? $request->get('status') : false;

        $data = self::leftjoin('roles as r', 'r.id', 'users.role_id')->select(['r.name as role_name', 'users.*']);

        if ($search['q']) {
            $data = $data->where('users.name', 'iLIKE', "%{$search['q']}%");
        }

        if ($search['status'] !== false) {
            if ($search['status'] == 1) {
                $data = $data->where('users.status', 1);
            } elseif ($search['status'] == 0) {
                $data = $data->where('users.status', 0);
            }
        }

        $rtn['search'] = $search;
        $rtn['data'] = $data->orderby('users.created_at', 'desc')->paginate(10);

        return $rtn;
    }

    public static function getAssignedRoleusers($role_id)
    {

        $users = User::select('*')
            ->where('users.role_id', $role_id)
            ->where('users.status', 1)
            ->paginate(10);

        return $users;
    }

    public function addForm($request = false)
    {

        if ($request === false) {
            $request = request();
        }

        $valid = $this->formValidation($request->all(), true);

        if ($valid === true) {

            $obj = User::find(auth()->user()->id);
            $obj->name = $request->name;
            $obj->email = $request->email;
            $obj->phone = $request->phone;
            if ($request->has('image')) {
                $obj->UpdateImage();
            }
            if ($request->has('theme')) {
                $obj->theme = $request->theme;
            }
            $obj->save();

            return Redirect::route('profile.settings')->with('status', 'profile-updated');

        } else {
            return $valid;
        }
    }

    public function updateForm($request = false)
    {

        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'role_id' => ['required', 'string'],
            'status' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        ]);

        $obj = User::find($request->id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->role_id = $request->role_id;

        $password = $request->password;
        if (!empty($password) && $password != '') {
            $obj->password = Hash::make($password);
        }

        if ($request->has('image')) {
            $obj->UpdateImage();
        }

        $obj->updated_by = auth()->user()->id;
        $obj->status = $request->status;
        $obj->update();

        session()->flash('success', 'User updated successfully');
        return Redirect::route('users.index');
    }

    public function createForm($request = false)
    {

        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'role_id' => ['required', 'string'],
            'password' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'image' => ['mimes:jpeg,jpg,png,gif', 'required', 'max:10000'],
        ]);

        $obj = new User;
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->role_id = $request->role_id;
        $obj->password = bcrypt($request->password);
        if ($request->has('image')) {
            $obj->UpdateImage();
        }
        $obj->created_by = auth()->user()->id;
        $obj->save();

        // update unique_number
        // $obj->unique_number = NumberGenerator($obj->id);
        // $obj->save();

        if ($obj) {
            $preference = UserPreferences::createUserPreferences($obj->id);
        }

        session()->flash('success', 'User created successfully');
        return Redirect::route('users.index');
    }

    public function formValidation($requestAll, $skipped = true, $id = false)
    {
        if ($id === false) {
            $validationArray = [
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore(auth()->user()->id)],
            ];
        } elseif ($id !== false) {
            $validationArray = [
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore(auth()->user()->id)],
            ];
        }

        if ($skipped !== true) {
            if (is_array($skipped)) {
                foreach ($skipped as $temp) {
                    unset($validationArray[$temp]);
                }
            } else {
                unset($validationArray[$skipped]);
            }
        }

        $v = Validator::make(
            $requestAll,
            $validationArray,
            [
                'name.required' => 'Please Provide name',
            ]
        );

        if ($v->fails()) {
            return back()->withErrors($v->getMessageBag()->toArray());
        } else {
            return true;
        }
    }

    public function UpdateImage($save = true)
    {
        $request = request();
        $dir = self::AvatarImage();
        $path = public_path() . '/' . $dir;
        $image = public_path() . '/' . $this->image;

        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

        if ($this->image != '' && File::exists($image)) {
            File::delete($image);
        }
        if ($request->image_remove == 1 && File::exists($image)) {
            File::delete($image);
            $this->image = '';
        } else {
            $extension = $request->file('image')->getClientOriginalExtension();
            $ImageName = strtolower($dir . Str::random(8) . '_' . time() . '_' . rand(1000, 9999) . '.' . $extension);
            $request->file('image')->move(self::AvatarImage(), $ImageName);
            $this->image = $ImageName;
        }

        if ($save) {
            $this->save();
        }
    }

    public static function getAllUsersForChat($search = false)
    {

        $loggedInUser = auth()->user()->id;
        $query = User::query();

        if ($search) {
            $query->where('users.name', 'ilike', "%{$search}%")
                ->orWhere('users.email', 'ilike', "%{$search}%");
        }

        $fetchedUsers = $query->where('id', '!=', $loggedInUser)
            ->select([
                'id',
                'name',
                'email',
                'phone',
                'image'
            ])
            ->where('status', 1)
            ->get();

        if (isset($fetchedUsers)) {
            foreach ($fetchedUsers as $user) {
                $user->complete_image_path = url($user->image);
            }
        }

        $users = $fetchedUsers;
        return isset($users) ? $users : null;

    }

    public static function getUserData($id)
    {
        $user = self::where('id', $id)->where('status', 1)->first();
        if ($user) {
            return $user;
        }
    }


    public function deleteObj()
    {
        $this->deleted_by = auth()->user()->id;
        $this->delete();

        return response()->json([
            'status' => 200,
            'message' => 'User has been deleted successfully',
        ]);
    }

}
