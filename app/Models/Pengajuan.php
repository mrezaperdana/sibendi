<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_barang',
        'jumlah',
        'no_nota',
        'penerima',
    ];
}
