<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'kode_barang',
        'jumlah',
        'no_nota',
        'penerima',
        'keterangan',
    ];

    // Transaksi.php
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'Kode_Barang', 'Kode_Barang');
    }
}
