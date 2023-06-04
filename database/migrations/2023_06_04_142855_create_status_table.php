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
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemesanan_id');
            $table->foreignId('cabang_id');
            $table->foreignId('kurir_id');
            $table->string('nama_barang');
            $table->string('lokasi_barang');
            $table->string('alamat_tujuan');
            $table->string('status_pengiriman');
            $table->string('tanggal_pengiriman');
            $table->string('tanggal_penerimaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
