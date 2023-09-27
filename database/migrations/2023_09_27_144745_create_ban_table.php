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
        Schema::create('ban', function (Blueprint $table) {
            $table->id('id_ban');
            $table->unsignedBigInteger('id_supplier');
            $table->string('merk_ban');
            $table->string('ukuran_ban');
            $table->integer('harga_ban');
            $table->integer('stok_ban');
            $table->timestamps();

            $table->foreign('id_supplier')->references('id_supplier')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ban');
    }
};
