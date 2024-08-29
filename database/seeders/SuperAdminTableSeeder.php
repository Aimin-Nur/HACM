<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class SuperAdminTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        SuperAdmin::create([
            'id' => $faker->uuid,
            'name' => 'Aiminnur',
            'email' => 'projectwebfinal@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
