<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Klinik',
                'email' => 'admin@klinik.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Andi',
                'email' => 'andi@klinik.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasien Budi',
                'email' => 'budi@klinik.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasien Sinta',  // Tambahkan pasien baru
                'email' => 'sinta@klinik.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
