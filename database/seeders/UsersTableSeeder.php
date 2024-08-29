<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 180; $i++) {
            User::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'username' => $faker->userName,
                'active' => $faker->boolean,
                'password' => Hash::make('password'),
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->streetAddress,
                'provinsi' => $faker->state,
                'kota' => $faker->city,
                'kecamatan' => $faker->citySuffix,
            ]);
        }
    }
}

