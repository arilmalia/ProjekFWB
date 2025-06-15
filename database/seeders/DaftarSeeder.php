<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DaftarsModel;
use Illuminate\Support\Facades\DB;

class DaftarSeeder extends Seeder
{
    public function run(): void
    {
        // DaftarsModel::insert([
        //     [
        //         'pasien_id' => 1,
        //         'dokter_id' => 1,
        //         'tanggal_daftar' => '2025-05-08',
        //         'keluhan' => 'Demam tinggi',
        //         'diagnosis' => 'Tipes',
        //         'tindakan' => 'Infus dan istirahat',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'pasien_id' => 2,
        //         'dokter_id' => 1,
        //         'tanggal_daftar' => '2025-05-09',
        //         'keluhan' => 'Batuk pilek',
        //         'diagnosis' => 'Flu biasa',
        //         'tindakan' => 'Obat dan vitamin',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);
    }
}
