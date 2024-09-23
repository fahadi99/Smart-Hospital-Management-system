<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\UserPreferences;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index () {
        $preferences = UserPreferences::getPreferences();
        return view('dashboard.index', compact('preferences'));
    }
}
