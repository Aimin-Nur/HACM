<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GetUser;
use App\Models\User;
use App\Models\Kelas;

class HomeController extends Controller
{
    protected $getUser;

    public function __construct(GetUser $getGuard)
    {
        $this->getGuard = $getGuard;
    }

    public function index()
    {
        $getUser = $this->getGuard->getCurrentUser();

        $getClass = Kelas::where('active', 1)->get();

        return view('home.index', compact('getUser', 'getClass'));
    }
}
