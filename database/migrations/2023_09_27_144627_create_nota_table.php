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
        Schema::create('nota', function (Blueprint $table) {
            $table->id('id_nota');
            $table->unsignedBigInteger('id_karyawan');
            $table->unsignedBigInteger('id_pembelian');
            $table->date('tanggal_nota');
            $table->integer('total_pembelian');
            $table->timestamps();

            // foreign key
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawan');
            $table->foreign('id_pembelian')->references('id_pembelian')->on('pembelian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota');
    }
};
