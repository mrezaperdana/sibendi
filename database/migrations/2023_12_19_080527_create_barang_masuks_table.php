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
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->comment('Date of incoming item');
            $table->string('no_nota')->comment('Note number');
            $table->unsignedBigInteger('kode_barang')->comment('Item ID');
            $table->string('satuan')->comment('Unit of measurement');
            $table->integer('harga_satuan')->comment('Price per unit');
            $table->integer('qty')->comment('Quantity');
            $table->timestamps();

            $table->foreign('kode_barang')->references('kode_barang')->on('barangs')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuks');
    }
};
