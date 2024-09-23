<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Redirect;

class ServiceCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'service_categories';

    protected $fillable = [
        'service_name',
        'default_amount',
        'employee_amount',
        'resident_amount',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public static function getById($id): ?self
    {
        return self::where('id', $id)->first();
    }

    public static function getAmountCharged($type, $service_category_id)
    {
        switch ($type) {
            case 'resident':
                $rtnVal = \DB::table('service_categories')->where('id', $service_category_id)->pluck('resident_amount');
                return $rtnVal;
                break;
            case 'non_resident':
                $rtnVal = \DB::table('service_categories')->where('id', $service_category_id)->pluck('default_amount');
                return $rtnVal;
                break;
            case 'employee':
                $rtnVal = \DB::table('service_categories')->where('id', $service_category_id)->pluck('employee_amount');
                return $rtnVal;
                break;
            default:
                $rtnVal = \DB::table('service_categories')->where('id', $service_category_id)->pluck('default_amount');
                return $rtnVal;
        }
    }

    public static function getActiveServiceCategories()
    {
        return self::where('status', 1)->get();
    }

    public static function getForSelect()
    {
        return self::active()->get();
    }

    public static function getAll()
    {
        $request = request();
        $search['q'] = $request->get('q', false);
        $search['status'] = $request->get('status', false);
        $data = self::select(['service_categories.*']);

        if ($search['q']) {
            $data->where('service_categories.service_name', 'iLIKE', "%{$search['q']}%");
        }

        if ($search['status'] !== false) {
            $data->where('status', $search['status']);
        }

        return [
            'search' => $search,
            'data' => $data->orderBy('service_categories.created_at', 'desc')->paginate(10)
        ];
    }

    public function addForm($request = null)
    {
        $request = $request ?? request();


        $request->validate([
            'service_name' => ['required'],
            'default_amount' => ['required', 'numeric'],
            'employee_amount' => ['required', 'numeric'],
            'resident_amount' => ['required', 'numeric'],
        ]);

        $this->service_name = $request->service_name;
        $this->default_amount = $request->default_amount;
        $this->employee_amount = $request->employee_amount;
        $this->resident_amount = $request->resident_amount;
        $this->status = 1;
        $this->created_by = auth()->user()->id;
        $this->save();

        session()->flash('success', 'Service category created successfully');
        return Redirect::route('service_categories.index');
    }

    public function updateForm($request = null)
    {
        $request = $request ?? request();

        $request->validate([
            'service_name' => ['required'],
            'default_amount' => ['required', 'numeric'],
            'employee_amount' => ['required', 'numeric'],
            'resident_amount' => ['required', 'numeric'],
            'status' => ['required'],
        ]);

        $this->service_name = $request->service_name;
        $this->default_amount = $request->default_amount;
        $this->employee_amount = $request->employee_amount;
        $this->resident_amount = $request->resident_amount;
        $this->status = $request->status;
        $this->updated_by = auth()->user()->id;
        $this->update();

        session()->flash('success', 'Service sategory updated successfully');
        return Redirect::route('service_categories.index');
    }

    public function deleteObj()
    {
        $this->deleted_by = auth()->user()->id;
        $this->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Service category has been deleted successfully',
        ]);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
