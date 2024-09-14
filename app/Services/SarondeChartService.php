<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Kelas;

class SarondeChartService
{
    public function getRoleWiseSalesData()
    {
        // Ambil kelas Saronde
        $saronde = Kelas::where('class_name', 'Saronde')->first();

        if (!$saronde) {
            return [
                'Specialist Doctor' => 0,
                'Doctor' => 0,
                'Nurse' => 0,
            ];
        }

        // Hitung total order per role (kecuali 'Student')
        $specialistDoctorCount = Order::where('id_class', $saronde->id)
            ->where('status', 1)
            ->whereHas('user', function ($query) {
                $query->where('roles', 'Specialist Doctor');
            })
            ->count();

        $doctorCount = Order::where('id_class', $saronde->id)
            ->where('status', 1)
            ->whereHas('user', function ($query) {
                $query->where('roles', 'Doctor');
            })
            ->count();

        $nurseCount = Order::where('id_class', $saronde->id)
            ->where('status', 1)
            ->whereHas('user', function ($query) {
                $query->where('roles', 'Nurse');
            })
            ->count();

        // Kembalikan data
        return [
            'Specialist Doctor' => $specialistDoctorCount,
            'Doctor' => $doctorCount,
            'Nurse' => $nurseCount,
        ];
    }
}
