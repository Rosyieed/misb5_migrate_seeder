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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id('id_pembelian');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_ban');
            $table->integer('jumlah_ban');
            $table->date('tanggal_pembelian');
            $table->integer('total_pembelian');
            $table->timestamps();

            // foreign key
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan');
            $table->foreign('id_ban')->references('id_ban')->on('ban');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
