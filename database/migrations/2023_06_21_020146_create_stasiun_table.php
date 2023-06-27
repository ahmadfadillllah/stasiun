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
        Schema::create('stasiun', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_provinsi')->constrained('indonesia_provinces');
            $table->foreignId('id_kota')->constrained('indonesia_cities');
            $table->foreignId('id_kecamatan')->constrained('indonesia_districts');
            $table->foreignId('id_desa')->constrained('indonesia_villages');
            $table->foreignId('id_pos')->constrained('pos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stasiun');
    }
};
