<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('obat', function (Blueprint $table) {
            $table->string('nama_obat', 50)->after('id');
            $table->string('kemasan', 35)->after('nama_obat');
            $table->integer('harga')->after('kemasan');
        });
    }

    public function down()
    {
        Schema::table('obat', function (Blueprint $table) {
            $table->dropColumn(['nama_obat', 'kemasan', 'harga']);
        });
    }
};