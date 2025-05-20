<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    public function superusers(Request $request)
    {
        return response()->json('superusers');
    }

    public function top_countries(Request $request)
    {
        return response()->json('top countries');
    }

    public function team_insights(Request $request)
    {
        return response()->json('team isights');
    }

    public function active_users_per_day(Request $request)
    {
        return response()->json('active users per day');
    }

    public function evaluation(Request $request)
    {
        return response()->json('evaluation');
    }

    public function users(Request $request)
    {
        $file = File::get($request);
        return response()->json('users');
    }
}

