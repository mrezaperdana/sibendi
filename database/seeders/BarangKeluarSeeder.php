<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BarangKeluar;
use Illuminate\Database\Seeder;

class BarangKeluarSeeder extends Seeder
{
    public function run()
    {
        // Truncate the existing records
        BarangKeluar::truncate();

        $csvFile = fopen(base_path("database/data/barang_keluar.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                BarangKeluar::create([
                    "Tanggal"       => $data[0],
                    "No_Nota"       => $data[1],
                    "Kode_Barang"   => $data[2],
                    "Sat"           => $data[3],
                    "Harga_Satuan"  => $data[4],
                    "Qty"           => $data[5],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}


