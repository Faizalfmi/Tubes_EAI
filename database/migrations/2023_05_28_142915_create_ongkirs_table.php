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
        Schema::create('ongkirs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_layanan',255);
            $table->bigInteger('berat_barang');
            $table->string('asal_pengiriman',255);
            $table->string('jarak_pengiriman',255);
            $table->string('metode_pengiriman',255);
            $table->string('asuransi_pengiriman',255);
            $table->bigInteger('biaya_ongkir');
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
        Schema::dropIfExists('ongkirs');
    }
};
