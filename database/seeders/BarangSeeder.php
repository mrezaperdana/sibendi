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
                    "Kode_Barang"   => $data[0],
                    "Nama_Barang"   => $data[1],
                    "Kategori"      => $data[2],
                    "Unit"          => $data[3],
                    "Harga_Satuan"  => $data[4],
                 ]);
             }
             $firstline = false;
         }
     
         fclose($csvFile);
     }
     
}
