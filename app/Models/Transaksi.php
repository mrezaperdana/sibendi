<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = 'id'; // Assuming id is the primary key
    protected $fillable = [
        'tanggal',
        'kode_barang',
        'jumlah',
        'no_nota',
        'penerima',
        'keterangan',
        'status',
    ];

    // Transaksi.php
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
