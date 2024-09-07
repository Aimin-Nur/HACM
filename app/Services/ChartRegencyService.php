<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Regency;

class ChartRegencyService
{
    public function getTopCitiesWithOrders($limit = 10)
    {
        return Order::with(['user.regency'])
            ->selectRaw('regencies.name as city_name, COUNT(order.id_users) as total_orders')
            ->join('users', 'users.id', '=', 'order.id_users')
            ->join('regencies', 'regencies.id', '=', 'users.kota')
            ->where('order.status', 1)
            ->groupBy('regencies.name')
            ->orderBy('total_orders', 'DESC')
            ->limit($limit)
            ->get();

            $orders->transform(function ($item) {
                $item->city_name = str_replace(['KABUPATEN ', 'KOTA '], '', $item->city_name);
                return $item;
            });

            return $orders;
    }

    public function topFirstCity()
    {
        return Order::with(['user.regency'])
                ->selectRaw('regencies.name as city_name, COUNT(order.id_users) as total_orders')
                ->join('users', 'users.id', '=', 'order.id_users')
                ->join('regencies', 'regencies.id', '=', 'users.kota')
                ->where('order.status', 1)
                ->groupBy('regencies.name')
                ->orderBy('total_orders', 'DESC')
                ->first();
    }
}
