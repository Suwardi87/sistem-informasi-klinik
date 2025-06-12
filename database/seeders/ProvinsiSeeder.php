<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsis = [
            'ACEH',
            'SUMATERA UTARA',
            'SUMATERA BARAT',
            'RIAU',
            'JAMBI',
            'SUMATERA SELATAN',
            'BENGKULU',
            'LAMPUNG',
            'KEPULAUAN BANGKA BELITUNG',
            'KEPULAUAN RIAU',
            'DKI JAKARTA',
            'JAWA BARAT',
            'JAWA TENGAH',
            'DAERAH ISTIMEWA YOGYAKARTA',
            'JAWA TIMUR',
            'BANTEN',
            'BALI',
            'NUSA TENGGARA BARAT',
            'NUSA TENGGARA TIMUR',
            'KALIMANTAN BARAT',
            'KALIMANTAN TENGAH',
            'KALIMANTAN SELATAN',
            'KALIMANTAN TIMUR',
            'KALIMANTAN UTARA',
            'SULAWESI UTARA',
            'SULAWESI TENGAH',
            'SULAWESI SELATAN',
            'SULAWESI TENGGARA',
            'GORONTALO',
            'SULAWESI BARAT',
            'MALUKU',
            'MALUKU UTARA',
            'PAPUA BARAT',
            'PAPUA',
        ];

        $data = array_map(function ($nama) {
            return [
                'uuid' => Str::uuid(),
                'nama' => $nama,
                'slug' => Str::slug($nama),
            ];
        }, $provinsis);

        DB::table('provinsis')->insert($data);
    }
}
