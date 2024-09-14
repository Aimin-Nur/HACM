<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Order;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua id dari tabel class dan users
        $classIds = Kelas::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();

        // Pastikan ada data di tabel class dan users
        if (count($classIds) == 0 || count($userIds) == 0) {
            $this->command->error("Tidak ada data di tabel class atau users.");
            return;
        }

        // Set tanggal acak antara Januari hingga bulan saat ini
        $startDate = Carbon::createFromDate(now()->year, 1, 1); // 1 Januari tahun ini
        $endDate = Carbon::now(); // Sekarang

        // Seed data order sebanyak 4500 entri
        for ($i = 0; $i < 4500; $i++) {
            $randomDate = Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp));

            Order::create([
                'id' => (string) Str::uuid(),
                'id_class' => $classIds[array_rand($classIds)],
                'id_users' => $userIds[array_rand($userIds)],
                'status' => collect([null, 1, 0])->random(),
                'description' => null,
                'payment_proof' => '1725287553_1.jpg',
                'created_at' => $randomDate,
                'updated_at' => $randomDate,
            ]);
        }

        $this->command->info('Seeder untuk tabel order berhasil dijalankan dengan 4500 entri.');
    }
}
