<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_periksa', function (Blueprint $table) {
            $table->id();
            // Relasi ke tabel periksa
            $table->foreignId('id_periksa')
                  ->constrained('periksa')
                  ->onDelete('cascade');
            // Relasi ke tabel obat
            $table->foreignId('id_obat')
                  ->constrained('obat')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_periksa');
    }
};
