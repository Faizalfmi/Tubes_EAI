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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            $table->float('berat_barang')->nullable();
            $table->string('asal_pengiriman')->nullable();
            $table->string('tujuan_pengiriman')->nullable();
            $table->bigInteger('jarak_pengiriman')->nullable();
            $table->string('asuransi_pengiriman')->nullable();
            $table->bigInteger('biaya_ongkir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
