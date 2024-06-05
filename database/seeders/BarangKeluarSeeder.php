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


