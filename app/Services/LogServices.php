<?php

namespace App\Services;

use App\Models\LogApp;
use Illuminate\Support\Facades\Auth;

class LogServices
{
    public static function logServices($action, $description, $query)
    {
        LogApp::create([
            'action' => $action,
            'description' => $description,
            'query' => json_encode($query),
            'user_id' => Auth::check() ? Auth::user()->id : (Auth::guard('admin')->check() ? Auth::guard('admin')->user()->id : '-'),
            'user_name' => Auth()->user()->name ?? 'Guest',
        ]);
    }

}
