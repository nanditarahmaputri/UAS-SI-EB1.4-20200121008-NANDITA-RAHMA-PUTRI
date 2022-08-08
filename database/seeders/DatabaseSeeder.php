<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Mahasiswa::factory(20)->create();
        // Matakuliah::factory()->createMany(
        //     [
        //         [
        //             'nama_matakuliah' => 'Business Intelegence' ,
        //             'sks' => 3,
        //         ],
        //         [
        //             'nama_matakuliah' => ' Pemrograman Internet Intermediate' ,
        //             'sks' => 4,
        //         ],
        //         [
        //             'nama_matakuliah' => 'UI/UX Design' ,
        //             'sks' => 3,
        //         ],
        //         [
        //             'nama_matakuliah' => 'Toefl Preparation' ,
        //             'sks' => 3,
        //         ],
        //         [
        //             'nama_matakuliah' => 'Analisa sistem beriorientasi objek' ,
        //             'sks' => 3,
        //         ],
        //         [
        //             'nama_matakuliah' => 'Rekayasa Perangkat Lunak' ,
        //             'sks' => 3,
        //         ],
        //         [
        //             'nama_matakuliah' => 'E-commerce' ,
        //             'sks' => 3
        //         ],
        //     ]
        // );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
