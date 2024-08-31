<?php

namespace App\Services;

use App\Models\Admin;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class AdminTableService
{
    public function getAdmin()
    {
        return Admin::get();
    }

    public function generateDataTable($usersQuery)
    {
        return DataTables::of($usersQuery)
            ->addColumn('name', function ($user) {
               return $user->name;
            })
            ->addColumn('email', function ($user) {
                return $user->email;
            })
            ->addColumn('created_at', function ($user) {
                return $user->created_at;
            })
            ->addColumn('active', function ($user) {
                return $user->active;
            })
            ->addColumn('action', function ($user) {
                $toggleStatus = $user->active ? 'Deactivate' : 'Activate';
                return '<button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal'. $user->id .'" data-bs-whatever="@getbootstrap"> '.$toggleStatus.'
                        </button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

}
