<?php

namespace App\Models;

use App\Models\UserPreferences;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Exception;

class UserPreferences extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'theme', 'rtl_mode', 'layout', 'system_language', 'data_view'];

    public static function createUserPreferences($user_id)
    {

        $user_preference = new UserPreferences;
        $user_preference->user_id = $user_id;
        $user_preference->theme = 'light';
        $user_preference->rtl_mode = 0;
        $user_preference->layout = 'dark_sidebar';
        $user_preference->system_language = 'english';
        $user_preference->data_view = 'list';
        $user_preference->created_by = auth()->user()->id;
        $user_preference->save();

        return $user_preference;
    }

    public static function getPreferences()
    {

        $preferences = self::all(['user_id', 'theme', 'rtl_mode', 'layout', 'system_language', 'data_view'])->where('user_id', auth()->user()->id);
        $mPreferences = [];

        foreach ($preferences as $se) {
            $mPreferences['preference']['theme'] = $se->theme;
            $mPreferences['preference']['rtl_mode'] = $se->rtl_mode;
            $mPreferences['preference']['layout'] = $se->layout;
            $mPreferences['preference']['system_language'] = $se->system_language;
            $mPreferences['preference']['data_view'] = $se->data_view;
        }

        return $mPreferences;
    }

    public function updatePreferences($request = false)
    {

        if ($request === false) {
            $request = request();
        }

        $request->validate([
            'theme' => ['required', 'string', 'max:255'],
            'rtl_mode' => ['required', 'string'],
            'layout' => ['required', 'string'],
            'system_language' => ['required', 'string'],
            'data_view' => ['required', 'string'],
        ]);

        try {

            $user_id = auth()->user()->id;

            $matchThese = ['user_id' => $user_id];
            UserPreferences::updateOrCreate(
                $matchThese,
                [
                    'theme' => $request->theme,
                    'rtl_mode' => $request->rtl_mode == true ? 1 : 0,
                    'layout' => $request->layout,
                    'system_language' => $request->system_language,
                    'data_view' => $request->data_view,
                    'created_by' => $user_id,
                ]
            );

            $message = 'User Preference updated successfully';
            return response()->json([
                'status' => 200,
                'message' => $message,
            ]);

        } catch (Exception $e) {
            $message = $e->getMessage();
            return response()->json([
                'status' => 400,
                'message' => $message
            ]);
        }

    }
}
