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
            $table->bigIncrements('kode_barang');
            $table->string('nama_barang');
            $table->unsignedBigInteger('kode_satuan');
            $table->unsignedBigInteger('kode_kategori');
            $table->integer('harga_satuan');
            $table->integer('stok')->default(0)->comment('Stock quantity');
            $table->timestamps();
            
            $table->foreign('kode_satuan')->references('kode_satuan')->on('admin_satuans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_kategori')->references('kode_kategori')->on('admin_kategoris')->onDelete('cascade')->onUpdate('cascade');
         
          
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
