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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id('id_pemeriksaan');
            $table->string('nama_pemilik');
            $table->string('nomor_telepon');
            $table->string('klinik');
            $table->string('nama_hewan');
            $table->string('jenis_hewan');
            $table->time('jam_temu');
            $table->date('tanggal');
            $table->enum('layanan', ['konsultasi', 'vaksinasi', 'operasi', 'grooming']);
            $table->enum('status', ['menunggu', 'selesai', 'dibatalkan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
