<?php

namespace App\Services;

use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class UserTableService
{
    public function getUsers()
    {
        return User::get();
    }

    public function generateDataTable($usersQuery)
    {
        return DataTables::of($usersQuery)
            ->addColumn('name', function ($user) {
                $url = route('detail-users', $user->name);
                return '<a href="' . $url . '">' . $user->name . '</a>';
            })
            ->addColumn('email', function ($user) {
                return $user->email;
            })
            ->addColumn('phone_number', function ($user) {
                return $user->phone_number;
            })
            ->addColumn('provinsi', function ($user) {
                return $user->provinsi;
            })
            ->addColumn('kota', function ($user) {
                return $user->kota;
            })
            ->rawColumns(['name'])
            ->make(true);
    }

}
