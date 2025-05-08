<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ResepsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        ResepsModel::insert([
            [
                'pasien_id' => 1,
                'daftar_id' => 1,
                'nama_obat' => 'Paracetamol',
                'keterangan' => '3x sehari setelah makan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pasien_id' => 2,
                'daftar_id' => 2,
                'nama_obat' => 'Woods',
                'keterangan' => '2x sehari pagi dan malam',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

