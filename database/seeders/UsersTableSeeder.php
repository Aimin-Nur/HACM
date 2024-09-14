<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        $roles = ['Doctor Specialist', 'Doctor', 'Nurse', 'Student'];

        for ($i = 0; $i < 380; $i++) {
            // Randomly select a province
            $province = Province::inRandomOrder()->first();

            // Get a regency belonging to the selected province
            $regency = Regency::where('province_id', $province->id)->inRandomOrder()->first();

            // Get a district belonging to the selected regency
            $district = District::where('regency_id', $regency->id)->inRandomOrder()->first();

            // Create the user with the selected province, regency, and district
            User::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'active' => $faker->boolean,
                'password' => Hash::make('password'),
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->streetAddress,
                'provinsi' => $province->id, // Storing the ID
                'kota' => $regency->id, // Storing the ID
                'kecamatan' => $district->id, // Storing the ID
                'roles' => $faker->randomElement(['Doctor Specialist', 'Doctor', 'Nurse', 'Student']),
                'active' => $faker->boolean,
            ]);
        }
    }
}


