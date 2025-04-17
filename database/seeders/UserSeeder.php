<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Dr.Mungkung',
            'alamat' => 'Jl.Sadewaaja',
            'no_hp' => '081248124423',
            'email' => "Mungkungaja@gmail.com",
            'role' => 'dokter',
            'password' => Hash::make('password')
        ]);

        User::create([
            'nama' => 'Mulyadi',
            'alamat' => 'Jl.Sadewawoi',
            'no_hp' => '08241245512312',
            'email' => "Mulyadi@gmail.com",
            'role' => 'pasien',
            'password' => Hash::make('password')
        ]);        
    }
}
