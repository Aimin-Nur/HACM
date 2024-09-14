<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data kelas 1
        Kelas::create([
            'class_name' => 'Simposium',
            'description' => 'loreom ipsum', // Anda dapat mengubah deskripsi sesuai kebutuhan
            'img' => 'simposium.jpg', // Sesuaikan atau kosongkan jika tidak perlu
            'price' => null, // Sesuaikan jika ada harga umum
            'price_doctor_specialist' => 400000,
            'price_doctor' => 250000,
            'price_nurses' => 100000,
            'price_student' => 100000,
            'date_release' => now(), // Gunakan tanggal yang sesuai
            'date_finish' => now()->addDays(45), // Misal kelas berlangsung selama 5 hari
            'max_participant' => 100, // Sesuaikan dengan kapasitas kelas
            'active' => 1,
        ]);

        // Data kelas 2
        Kelas::create([
            'class_name' => 'Saronde',
            'description' => 'Lorem Ipsum', // Ubah deskripsi sesuai kebutuhan
            'img' => 'saronde.jpg', // Sesuaikan atau kosongkan jika tidak perlu
            'price' => null, // Sesuaikan jika ada harga umum
            'price_doctor_specialist' => 600000,
            'price_doctor' => 450000,
            'price_nurses' => 400000,
            'price_student' => null, // Kosongkan jika tidak ada harga untuk siswa
            'date_release' => now(), // Gunakan tanggal yang sesuai
            'date_finish' => now()->addDays(45), // Misal kelas berlangsung selama 7 hari
            'max_participant' => 150, // Sesuaikan dengan kapasitas kelas
            'active' => 1,
        ]);
    }
}
