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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('kode_barang');
            $table->string('nama_barang')->comment('Item name');
            $table->string('kategori')->comment('Category');
            $table->string('satuan')->comment('Unit of measurement');
            $table->integer('harga_satuan')->comment('Price per unit');
            $table->integer('stok')->default(0)->comment('Stock quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
