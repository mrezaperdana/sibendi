<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tanggal',
        'Kode_Barang',
        'Jumlah',
        'No_Nota',
        'Penerima',
        'Keterangan',
    ];

    // Transaksi.php
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'Kode_Barang', 'Kode_Barang');
    }
}
