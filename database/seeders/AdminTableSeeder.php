<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Admin dengan nama 'Muhaimin Nur'
        Admin::create([
            'id' => $faker->uuid,
            'name' => 'Muhaimin Nur', // Nama spesifik
            'email' => 'aiminnur02@gmail.com', // Email spesifik atau bisa diganti sesuai kebutuhan
            'password' => Hash::make('welcome28*'),
            'active' => true, // Admin aktif
        ]);

        // Admin dengan nama 'HACM Admin'
        Admin::create([
            'id' => $faker->uuid,
            'name' => 'HACM Admin', // Nama spesifik
            'email' => 'hacmgorontalo@gmail.com', // Email spesifik atau bisa diganti sesuai kebutuhan
            'password' => Hash::make('HACM_gorontalo28'),
            'active' => true, // Admin aktif
        ]);
    }
}
