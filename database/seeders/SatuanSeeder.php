<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminSatuan;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
     public function run()
     {
         // Truncate the existing records
         AdminSatuan::truncate();
     
         $csvFile = fopen(base_path("database/data/satuan.csv"), "r");
     
         $firstline = true;
         while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
             if (!$firstline) {
                AdminSatuan::create([
                    "nama_satuan"   => $data[0],
                    "keterangan"   => $data[1],
                 ]);
             }
             $firstline = false;
         }
     
         fclose($csvFile);
     }
     
}