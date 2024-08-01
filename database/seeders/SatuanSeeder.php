<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminSatuan;
use Illuminate\Support\Facades\DB;
class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
     public function run()
     {
           // Disable foreign key checks
           DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
           // Truncate the existing records
           AdminSatuan::truncate();
           
           // Re-enable foreign key checks
           DB::statement('SET FOREIGN_KEY_CHECKS=1;');
         
     
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