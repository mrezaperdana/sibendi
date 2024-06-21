<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminKategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
     public function run()
     {
         // Truncate the existing records
         AdminKategori::truncate();
     
         $csvFile = fopen(base_path("database/data/kategori.csv"), "r");
     
         $firstline = true;
         while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
             if (!$firstline) {
                AdminKategori::create([
                    "nama_kategori"   => $data[0],
                    "keterangan"   => $data[1],
                 ]);
             }
             $firstline = false;
         }
     
         fclose($csvFile);
     }
     
}