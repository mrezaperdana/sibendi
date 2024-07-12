<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKategori extends Model
{
    use HasFactory;
    protected $table = 'admin_kategoris'; //ini nama tabel
    protected $primaryKey = 'kode_kategori'; //custom primary key
    protected $fillable = [
        
        'nama_kategori',
        'keterangan',  // Add this line
    ];
}
