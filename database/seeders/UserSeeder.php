<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
                'is_active' => true
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Pasien',
                'username' => 'pasien',
                'email' => 'pasien@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'pasien',
                'is_active' => true
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Dokter',
                'username' => 'dokter',
                'email' => 'dokter@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'dokter',
                'is_active' => true
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Kasir',
                'username' => 'kasir',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'kasir',
                'is_active' => true
            ]
        ]);
    }
}

