<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nama' => 'Andi',
                'prodi' => 'Informatika',
                'angkatan' => '2021',
                'status' => 'Aktif',
                'jenis_kelamin' => 'L',
                'ipk' => 3.8
            ],
            [
                'nama' => 'Budi',
                'prodi' => 'Sistem Informasi',
                'angkatan' => '2021',
                'status' => 'Lulus',
                'jenis_kelamin' => 'L',
                'ipk' => 3.5
            ],
            [
                'nama' => 'Citra',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'status' => 'Aktif',
                'jenis_kelamin' => 'P',
                'ipk' => 3.9
            ],
            [
                'nama' => 'Dina',
                'prodi' => 'Data Science',
                'angkatan' => '2023',
                'status' => 'Aktif',
                'jenis_kelamin' => 'P',
                'ipk' => 3.7
            ]
        ]);
    }
}