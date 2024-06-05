<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\StokBarang;
use Illuminate\Database\Seeder;

class StokBarangSeeder extends Seeder
{
    public function run()
    {
        // Truncate the existing records
        StokBarang::truncate();

        $csvFile = fopen(base_path("database/data/stok_barang.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                StokBarang::create([
                    "kode_barang"   => $data[0],
                    "stok"         => $data[1],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}

