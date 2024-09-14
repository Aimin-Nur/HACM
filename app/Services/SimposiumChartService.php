<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Kelas;

class SimposiumChartService
{
    public function getRoleWiseSalesData()
    {
        // Ambil kelas Simposium
        $simposium = Kelas::where('class_name', 'Simposium')->first();

        if (!$simposium) {
            return [
                'Specialist Doctor' => 0,
                'Doctor' => 0,
                'Nurse' => 0,
                'Student' => 0,
            ];
        }

        // Hitung total order per role
        $specialistDoctorCount = Order::where('id_class', $simposium->id)
            ->where('status', 1)
            ->whereHas('user', function ($query) {
                $query->where('roles', 'Specialist Doctor');
            })
            ->count();

        $doctorCount = Order::where('id_class', $simposium->id)
            ->where('status', 1)
            ->whereHas('user', function ($query) {
                $query->where('roles', 'Doctor');
            })
            ->count();

        $nurseCount = Order::where('id_class', $simposium->id)
            ->where('status', 1)
            ->whereHas('user', function ($query) {
                $query->where('roles', 'Nurse');
            })
            ->count();

        $studentCount = Order::where('id_class', $simposium->id)
            ->where('status', 1)
            ->whereHas('user', function ($query) {
                $query->where('roles', 'Student');
            })
            ->count();

        // Kembalikan data
        return [
            'Specialist Doctor' => $specialistDoctorCount,
            'Doctor' => $doctorCount,
            'Nurse' => $nurseCount,
            'Student' => $studentCount,
        ];
    }
}
