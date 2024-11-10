<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            IndoRegionSeeder::class,
            KelasTableSeeder::class,
            UsersTableSeeder::class,
            // SuperAdminTableSeeder::class,
            AdminTableSeeder::class,
            OrderSeeder::class,
            TicketSeeder::class,
        ]);
    }
}

