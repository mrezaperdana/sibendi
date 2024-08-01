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
        Schema::create('admin_kategoris', function (Blueprint $table) {
            $table->bigIncrements('kode_kategori');
            $table->string('nama_kategori')->index()->comment('Name of the category');
            $table->text('keterangan')->nullable()->comment('Description of the category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_kategoris');
    }
};
