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
            $table->bigInteger('id_pemesanan')->unsigned()->index()->nullable();
            $table->foreign('id_pemesanan')->references('id')->on('pemesanans');
            $table->bigInteger('id_cabang')->unsigned()->index()->nullable();
            $table->foreign('id_cabang')->references('id')->on('cabangs');
            $table->string('nama_barang',255);
            $table->string('lokasi_barang',255);
            $table->string('alamat_tujuan',255);
            $table->string('status_pengiriman',255);
            $table->string('tanggal_pengiriman',255);
            $table->string('tanggal_penerimaan',255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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
