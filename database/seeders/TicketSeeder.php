<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua id dari tabel class, users, dan order
        $orders = Order::with('kelas', 'user')->get(); // Ambil data order lengkap dengan relasi kelas dan user

        // Seed data ticket
        foreach ($orders as $order) {
            // Buat ticket_code berdasarkan logika yang disediakan
            $class = $order->kelas;
            $classInitial = strtoupper(substr($class->class_name, 0, 1));

            $ticketCount = Ticket::where('id_class', $order->id_class)->count();
            $orderNumber = str_pad($ticketCount + 1, 2, '0', STR_PAD_LEFT); // Menghasilkan urutan dengan dua digit

            // Ambil 2 digit random dari UUID id_class
            $classUuidPart = substr(str_replace('-', '', $order->id_class), mt_rand(0, 30), 2);

            // Ambil 2 digit random dari UUID id_users
            $userUuidPart = substr(str_replace('-', '', $order->id_users), mt_rand(0, 30), 2);

            // Buat ticket_code dengan format E013486
            $ticketCode = $classInitial . $orderNumber . $classUuidPart . $userUuidPart;

            // Buat data ticket
            Ticket::create([
                'id' => (string) Str::uuid(),
                'id_class' => $order->id_class,
                'id_users' => $order->id_users,
                'id_order' => $order->id,
                'generate_ticket' => '0',
                'active' => true,
                'ticket_code' => $ticketCode,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $this->command->info('Seeder untuk tabel ticket berhasil dijalankan.');
    }
}
