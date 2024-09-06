<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Order;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class OrderTableService
{
    public function getOrders()
    {
        return Order::with('user', 'kelas')->get();
    }

    public function generateDataTable($usersQuery)
    {
        return DataTables::of($usersQuery)
            ->addColumn('name', function ($order) {
               return $order->user->name;
            })
            ->addColumn('email', function ($order) {
                return $order->user->email;
            })
            ->addColumn('class', function ($order) {
                return $order->kelas->class_name;
            })
            ->addColumn('price', function ($order) {
                return $order->kelas->price;
            })
            ->addColumn('status', function ($order) {
                if($order->status == 1)
                    return '<span class="badge badge-soft-success">Success</span>';
                elseif($order->status == 0)
                    return '<span class="badge badge-soft-danger">Rejected</span>';
                else
                    return '<span class="badge badge-soft-warning">Pending</span>';
            })
            ->addColumn('action', function ($order) {
                $buttons = '<div class="dropstart">
                                <button type="button" class="btn waves-effect waves-light dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=" ' . route('order-detail', ['id' => $order->id]) . '">View Detail</a>
                                    <a class="dropdown-item" href="#">View Payment Proof</a>
                                    <a class="dropdown-item" href="#">Accept Validation</a>
                                </div>
                            </div>';
                return $buttons;
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

}
