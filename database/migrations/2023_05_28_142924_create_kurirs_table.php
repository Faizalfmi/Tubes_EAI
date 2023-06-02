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
        Schema::create('kurirs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_status')->unsigned()->index()->nullable();
            $table->foreign('id_status')->references('id')->on('status');
            $table->bigInteger('id_ongkir')->unsigned()->index()->nullable();
            $table->foreign('id_ongkir')->references('id')->on('ongkirs');
            $table->string('nama_kurir');
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
        Schema::dropIfExists('kurirs');
    }
};
