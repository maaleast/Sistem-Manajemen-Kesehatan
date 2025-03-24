<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Approach 1: Using DB facade (faster for multiple inserts)
        DB::table('users')->insert([
            [
                'nama' => 'Admin',
                'alamat' => 'Jl. Admin No.1',
                'no_hp' => '081234567890',
                'email' => 'admin1@example.com',
                'role' => 'admin',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dr. Budi',
                'alamat' => 'Jl. Dokter No.1',
                'no_hp' => '081234567891',
                'email' => 'dokter2@example.com',
                'role' => 'dokter',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pasien 1',
                'alamat' => 'Jl. Pasien No.1',
                'no_hp' => '081234567892',
                'email' => 'pasien44@example.com',
                'role' => 'pasien',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Approach 2: Using Eloquent model (better for model events)
        // Uncomment if you need to trigger model events
        /*
        User::create([
            'nama' => 'Admin 2',
            'alamat' => 'Jl. Admin No.2',
            'no_hp' => '081234567893',
            'email' => 'admin2@example.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
        */
    }
}