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
}
