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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->comment('Transaction date');
            $table->string('no_nota')->comment('Note number');
            $table->string('penerima')->comment('Recipient');
            $table->unsignedBigInteger('kode_barang')->comment('Item ID');
            $table->integer('jumlah')->comment('Quantity');
            $table->string('keterangan')->nullable()->comment('Description');
            $table->integer('status')->default(0)->comment('Transaction status');
            $table->timestamps();

            $table->foreign('kode_barang')->references('kode_barang')->on('barangs')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
