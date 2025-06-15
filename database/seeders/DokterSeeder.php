<?php

namespace Database\Seeders;
use App\Models\DoktersModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        // DoktersModel::insert([
        //     [
        //         'user_id' => 2, // ID user Dr. Rina
        //         'no_dokter' => 'D001',
        //         'nama' => 'Dr. Rina',
        //         'spesialis' => 'Umum',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);
    }
}
