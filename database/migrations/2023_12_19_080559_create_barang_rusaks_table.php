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
        Schema::create('barang_rusaks', function (Blueprint $table) {
            $table->date('Tanggal');
            $table->string('No_Nota');
            $table->integer('Kode_Barang');
            $table->string('Sat');
            $table->integer('Harga_Satuan');
            $table->integer('Qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_rusaks');
    }
};
