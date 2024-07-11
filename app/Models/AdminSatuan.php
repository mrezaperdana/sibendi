<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSatuan extends Model
{
    use HasFactory;
    protected $table = 'admin_satuans'; //ini nama tabel
    protected $primaryKey = 'kode_satuan'; //custom primary key
    protected $fillable = [
        
        'nama_satuan',
        'keterangan',  // Add this line
    ];
}
