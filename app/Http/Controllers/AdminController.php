<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $getUser = Auth::user();
        return view('admin.index', compact('getUser'));
    }
}
