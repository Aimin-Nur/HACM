<?php

namespace App\Services;

use App\Models\Kelas;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class YearlyChartService
{
    public function getYearlySalesData()
    {
        $classes = Kelas::with('orders')->get();
        $classNames = [];
        $seriesData = [];
        $months = [];

        // Populate the months array
        for ($month = 1; $month <= now()->month; $month++) {
            $months[] = now()->startOfYear()->addMonths($month - 1)->shortMonthName;
        }

        foreach ($classes as $class) {
            $classNames[] = $class->class_name;

            // Initialize monthly sales with zeroes
            $monthlySales = array_fill(0, now()->month, 0);

            // Count the orders for each month
            foreach ($class->orders as $order) {
                $orderMonth = $order->created_at->month;
                $monthlySales[$orderMonth - 1]++;
            }

            $seriesData[] = [
                'name' => $class->class_name,
                'type' => 'line', // or 'column', 'area'
                'data' => $monthlySales,
            ];
        }

        // Ensure no null or empty data is sent
        if (empty($seriesData)) {
            $seriesData[] = [
                'name' => 'No Data',
                'type' => 'line',
                'data' => array_fill(0, now()->month, 0),
            ];
        }

        return compact('classNames', 'seriesData', 'months');
    }

    public function getMonthlySalesReport()
    {
        $currentMonth = Carbon::now()->month;
        $year = Carbon::now()->year;

        // Retrieve traffic (order count) for each class for the current month
        $classTraffic = DB::table('order')
            ->join('class', 'order.id_class', '=', 'class.id')
            ->select('class.class_name', DB::raw('COUNT(order.id) as order_count'))
            ->whereMonth('order.created_at', $currentMonth)
            ->whereYear('order.created_at', $year)
            ->groupBy('class.class_name')
            ->get();

        $classNames = [];
        $orderCounts = [];

        foreach ($classTraffic as $traffic) {
            $classNames[] = $traffic->class_name;
            $orderCounts[] = $traffic->order_count;
        }

        // Calculate sales for the current month by summing class prices
        $currentMonthSales = DB::table('order')
            ->join('class', 'order.id_class', '=', 'class.id')
            ->whereMonth('order.created_at', $currentMonth)
            ->whereYear('order.created_at', $year)
            ->sum('class.price');

        // Calculate sales for the previous month
        $previousMonthSales = DB::table('order')
            ->join('class', 'order.id_class', '=', 'class.id')
            ->whereMonth('order.created_at', Carbon::now()->subMonth()->month)
            ->whereYear('order.created_at', $year)
            ->sum('class.price');

        // Calculate the percentage difference between current and previous month
        if ($previousMonthSales > 0) {
            $difference = (($currentMonthSales - $previousMonthSales) / $previousMonthSales) * 100;
        } else {
            $difference = 100; // Assume 100% increase if there were no sales last month
        }

        // Determine if sales increased or decreased
        $isIncreased = $currentMonthSales > $previousMonthSales;

        // Format the date range for the current month
        $currentMonthRange = Carbon::now()->format('01 M') . ' - ' . Carbon::now()->format('d M, Y');

        return compact(
            'currentMonthSales',
            'previousMonthSales',
            'difference',
            'isIncreased',
            'currentMonthRange',
            'classNames',
            'orderCounts'
        );
    }
}
