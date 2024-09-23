<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;

class UserPreferencesController extends Controller
{
    public function change_preferences (Request $request) {
        $obj = new UserPreferences();
        return $obj->updatePreferences();
    }
}
