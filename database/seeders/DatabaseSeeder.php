<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Nonaktifkan foreign key check
        Schema::disableForeignKeyConstraints();

        // Kosongkan tabel dengan DB facade untuk menghindari model events
        DB::table('detail_periksa')->truncate();
        DB::table('periksa')->truncate();
        DB::table('obat')->truncate();
        DB::table('users')->truncate();

        // Aktifkan kembali foreign key check
        Schema::enableForeignKeyConstraints();

        // Jalankan seeder
        $this->call([
            UsersTableSeeder::class,
            ObatTableSeeder::class,
        ]);
    }
}