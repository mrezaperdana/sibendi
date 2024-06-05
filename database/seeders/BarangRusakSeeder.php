<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BarangRusak;
use Illuminate\Database\Seeder;

class BarangRusakSeeder extends Seeder
{
    public function run()
    {
        // Truncate the existing records
        BarangRusak::truncate();

        $csvFile = fopen(base_path("database/data/barang_rusak.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                BarangRusak::create([
                    "tanggal"       => $data[0],
                    "no_nota"       => $data[1],
                    "kode_barang"   => $data[2],
                    "satuan"           => $data[3],
                    "harga_satuan"  => $data[4],
                    "qty"           => $data[5],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}

