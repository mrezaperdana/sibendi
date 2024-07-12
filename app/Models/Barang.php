<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $primaryKey = 'kode_barang'; // Custom primary key
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'satuan',
        'kategori',
        'harga_satuan',
    ];

    public function kategori()
    {
        return $this->belongsTo(AdminKategori::class, 'kode_kategori', 'kode_kategori');
    }

    public function satuan()
    {
        return $this->belongsTo(AdminSatuan::class, 'kode_satuan', 'kode_satuan');
    }
}
