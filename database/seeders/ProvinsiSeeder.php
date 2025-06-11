<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsis')->insert([
            ['uuid' => Str::uuid(), 'nama' => 'ACEH', 'slug' => Str::slug('ACEH')],
            ['uuid' => Str::uuid(), 'nama' => 'SUMATERA UTARA', 'slug' => Str::slug('SUMATERA UTARA')],
            ['uuid' => Str::uuid(), 'nama' => 'SUMATERA BARAT', 'slug' => Str::slug('SUMATERA BARAT')],
            ['uuid' => Str::uuid(), 'nama' => 'RIAU', 'slug' => Str::slug('RIAU')],
            ['uuid' => Str::uuid(), 'nama' => 'JAMBI', 'slug' => Str::slug('JAMBI')],
            ['uuid' => Str::uuid(), 'nama' => 'SUMATERA SELATAN', 'slug' => Str::slug('SUMATERA SELATAN')],
            ['uuid' => Str::uuid(), 'nama' => 'BENGKULU', 'slug' => Str::slug('BENGKULU')],
            ['uuid' => Str::uuid(), 'nama' => 'LAMPUNG', 'slug' => Str::slug('LAMPUNG')],
            ['uuid' => Str::uuid(), 'nama' => 'KEPULAUAN BANGKA BELITUNG', 'slug' => Str::slug('KEPULAUAN BANGKA BELITUNG')],
            ['uuid' => Str::uuid(), 'nama' => 'KEPULAUAN RIAU', 'slug' => Str::slug('KEPULAUAN RIAU')],
            ['uuid' => Str::uuid(), 'nama' => 'DKI JAKARTA', 'slug' => Str::slug('DKI JAKARTA')],
            ['uuid' => Str::uuid(), 'nama' => 'JAWA BARAT', 'slug' => Str::slug('JAWA BARAT')],
            ['uuid' => Str::uuid(), 'nama' => 'JAWA TENGAH', 'slug' => Str::slug('JAWA TENGAH')],
            ['uuid' => Str::uuid(), 'nama' => 'DAERAH ISTIMEWA YOGYAKARTA', 'slug' => Str::slug('DAERAH ISTIMEWA YOGYAKARTA')],
            ['uuid' => Str::uuid(), 'nama' => 'JAWA TIMUR', 'slug' => Str::slug('JAWA TIMUR')],
            ['uuid' => Str::uuid(), 'nama' => 'BANTEN', 'slug' => Str::slug('BANTEN')],
            ['uuid' => Str::uuid(), 'nama' => 'BALI', 'slug' => Str::slug('BALI')],
            ['uuid' => Str::uuid(), 'nama' => 'NUSA TENGGARA BARAT', 'slug' => Str::slug('NUSA TENGGARA BARAT')],
            ['uuid' => Str::uuid(), 'nama' => 'NUSA TENGGARA TIMUR', 'slug' => Str::slug('NUSA TENGGARA TIMUR')],
            ['uuid' => Str::uuid(), 'nama' => 'KALIMANTAN BARAT', 'slug' => Str::slug('KALIMANTAN BARAT')],
            ['uuid' => Str::uuid(), 'nama' => 'KALIMANTAN TENGAH', 'slug' => Str::slug('KALIMANTAN TENGAH')],
            ['uuid' => Str::uuid(), 'nama' => 'KALIMANTAN SELATAN', 'slug' => Str::slug('KALIMANTAN SELATAN')],
            ['uuid' => Str::uuid(), 'nama' => 'KALIMANTAN TIMUR', 'slug' => Str::slug('KALIMANTAN TIMUR')],
            ['uuid' => Str::uuid(), 'nama' => 'KALIMANTAN UTARA', 'slug' => Str::slug('KALIMANTAN UTARA')],
            ['uuid' => Str::uuid(), 'nama' => 'SULAWESI UTARA', 'slug' => Str::slug('SULAWESI UTARA')],
            ['uuid' => Str::uuid(), 'nama' => 'SULAWESI TENGAH', 'slug' => Str::slug('SULAWESI TENGAH')],
            ['uuid' => Str::uuid(), 'nama' => 'SULAWESI SELATAN', 'slug' => Str::slug('SULAWESI SELATAN')],
            ['uuid' => Str::uuid(), 'nama' => 'SULAWESI TENGGARA', 'slug' => Str::slug('SULAWESI TENGGARA')],
            ['uuid' => Str::uuid(), 'nama' => 'GORONTALO', 'slug' => Str::slug('GORONTALO')],
            ['uuid' => Str::uuid(), 'nama' => 'SULAWESI BARAT', 'slug' => Str::slug('SULAWESI BARAT')],
            ['uuid' => Str::uuid(), 'nama' => 'MALUKU', 'slug' => Str::slug('MALUKU')],
            ['uuid' => Str::uuid(), 'nama' => 'MALUKU UTARA', 'slug' => Str::slug('MALUKU UTARA')],
            ['uuid' => Str::uuid(), 'nama' => 'PAPUA BARAT', 'slug' => Str::slug('PAPUA BARAT')],
            ['uuid' => Str::uuid(), 'nama' => 'PAPUA', 'slug' => Str::slug('PAPUA')],
        ]);


    }
}
