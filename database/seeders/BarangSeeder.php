<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
     public function run()
     {
         // Truncate the existing records
         Barang::truncate();
     
         $csvFile = fopen(base_path("database/data/barang.csv"), "r");
     
         $firstline = true;
         while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
             if (!$firstline) {
                
                 Barang::create([
                    "kode_barang"   => $data[0],
                    "nama_barang"   => $data[1],
                    "kode_satuan"          => $data[2],
                    "kode_kategori"      => $data[3],
                    "harga_satuan"  => $data[4],
                    "stok"  => $data[5],
                 ]);
             }
             $firstline = false;
         }
     
         fclose($csvFile);
     }
     
}