<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabupatens')->insert([
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Badung',
                'slug' => Str::slug('Kabupaten Badung'),
                'provinsi_id' => 1,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Gianyar',
                'slug' => Str::slug('Kabupaten Gianyar'),
                'provinsi_id' => 1,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Klungkung',
                'slug' => Str::slug('Kabupaten Klungkung'),
                'provinsi_id' => 1,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Bangli',
                'slug' => Str::slug('Kabupaten Bangli'),
                'provinsi_id' => 2,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Buleleng',
                'slug' => Str::slug('Kabupaten Buleleng'),
                'provinsi_id' => 2,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Jembrana',
                'slug' => Str::slug('Kabupaten Jembrana'),
                'provinsi_id' => 2,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Karangasem',
                'slug' => Str::slug('Kabupaten Karangasem'),
                'provinsi_id' => 3,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Tabanan',
                'slug' => Str::slug('Kabupaten Tabanan'),
                'provinsi_id' => 3,
            ],
            [
                'uuid' => Str::uuid(),
                'nama' => 'Kabupaten Denpasar',
                'slug' => Str::slug('Kabupaten Denpasar'),
                'provinsi_id' => 3,
            ],]);
    }
}
