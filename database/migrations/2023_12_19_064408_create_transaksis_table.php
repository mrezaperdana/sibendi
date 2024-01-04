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
            $table->date('Tanggal');
            $table->string('No_Nota');
            $table->string('Penerima');
            $table->integer('Kode_Barang');
            $table->integer('Jumlah');
            $table->string('Keterangan')->nullable();
            $table->integer('Status')->default(0);
            $table->timestamps();

            
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
