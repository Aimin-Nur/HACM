<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Province;

class ChartProvinceService
{
    public function getTopProvincesWithorder()
    {
        $order = Order::with(['user.province'])
            ->selectRaw('provinces.name as province_name, COUNT(order.id_users) as total_orders')
            ->join('users', 'users.id', '=', 'order.id_users')
            ->join('provinces', 'provinces.id', '=', 'users.provinsi')
            ->where('order.status', 1)
            ->groupBy('provinces.name')
            ->orderBy('total_orders', 'DESC')
            ->limit(6)
            ->get();

        return $order;
    }
}
