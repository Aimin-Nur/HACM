<?php

namespace App\Services;

use App\Models\User;
use App\Models\Order;
use App\Models\Ticket;

class LogUserService
{
    /**
     * Get the latest activity logs for the last 12 users.
     *
     * @return array
     */
    public function getLatestUserLogs()
    {
        // Ambil 12 pengguna terbaru berdasarkan aktivitas mereka
        $latestUsers = User::with(['orders', 'tickets'])
            ->whereHas('orders') // Mengambil hanya users yang memiliki aktivitas
            ->orWhereHas('tickets')
            ->orderBy('created_at', 'asc')
            ->limit(1)
            ->get();

        // Buat log aktivitas untuk setiap pengguna
        $userLogs = $latestUsers->map(function ($user) {
            $logs = [];

            // Log aktivitas registrasi akun
            $logs[] = [
                'type' => 'Registration',
                'user' => $user->name,
                'date' => $user->created_at->format('d M'),
                'message' => "User {$user->name} registered an account.",
            ];

            // Log aktivitas order kelas
            foreach ($user->orders as $order) {
                $status = $order->status ? 'approved' : 'rejected';
                $logs[] = [
                    'type' => 'Class Order',
                    'user' => $user->name,
                    'date' => $order->created_at->format('d M'),
                    'message' => "User {$user->name} made an order. Status: {$status}.",
                ];
            }

            // Log aktivitas generate tiket
            foreach ($user->tickets as $ticket) {
                $logs[] = [
                    'type' => 'Ticket Generation',
                    'user' => $user->name,
                    'date' => $ticket->created_at->format('d M'),
                    'message' => "Ticket generated for user {$user->name}.",
                ];
            }

            return $logs;
        })->flatten(1)->sortByDesc('date')->values()->toArray();

        return $userLogs;
    }
}
