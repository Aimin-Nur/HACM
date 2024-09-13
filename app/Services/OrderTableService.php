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
        return Order::with('user', 'kelas')->orderBy('updated_at', 'desc')->get();
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
                return $order->formatted_price ?? '';
            })
            ->addColumn('status', function ($order) {
                if ($order->status == 1) {
                    return '<span class="badge badge-soft-success">Success</span>';
                } elseif ($order->status == NULL) {
                    return '<span class="badge badge-soft-warning">Pending</span>';
                } else {
                    return '<span class="badge badge-soft-danger">Rejected</span>';
                }
            })
            ->addColumn('action', function ($order) {
                if($order->status == 1){
                    $buttons = '<div class="dropstart">
                                    <button type="button" class="btn waves-effect waves-light dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                     <div class="dropdown-menu">
                                        <a class="dropdown-item" href="' . route('order-detail', ['id' => $order->id]) . '">View Detail</a>
                                    </div>
                                </div>';
                    return $buttons;
                }elseif ($order->status == 0) {
                    $buttons = '<div class="dropstart">
                                    <button type="button" class="btn waves-effect waves-light dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="' . route('order-detail', ['id' => $order->id]) . '">View Detail</a>
                                        <form action="' . route('edit-payment', ['id' => $order->id]) . '" method="POST" class="d-inline">
                                            ' . csrf_field() . '
                                            <input type="hidden" value="1" name="status">
                                            <button type="submit" class="dropdown-item">Accept Validation</button>
                                        </form>
                                    </div>
                                </div>';
                    return $buttons;
                } elseif (is_null($order->status)) {
                    $buttons =  '<div class="dropstart">
                                    <button type="button" class="btn waves-effect waves-light dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="' . route('order-detail', ['id' => $order->id]) . '">View Detail</a>
                                        <form action="' . route('edit-payment', ['id' => $order->id]) . '" method="POST" class="d-inline">
                                            ' . csrf_field() . '
                                            <input type="hidden" value="1" name="status">
                                            <button type="submit" class="dropdown-item">Accept Validation</button>
                                        </form>
                                    </div>
                                </div>';
                    return $buttons;
                } else {
                    $buttons = '<div class="dropstart">
                                    <button type="button" class="btn waves-effect waves-light dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="' . route('order-detail', ['id' => $order->id]) . '">View Detail</a>
                                        <form action="' . route('edit-payment', ['id' => $order->id]) . '" method="POST" class="d-inline">
                                            ' . csrf_field() . '
                                            <input type="hidden" value="1" name="status">
                                            <button type="submit" class="dropdown-item">Accept Validation</button>
                                        </form>
                                    </div>
                                </div>';
                    return $buttons;
                }

            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

}
