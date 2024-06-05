<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BarangMasuk;
use Illuminate\Database\Seeder;

class BarangMasukSeeder extends Seeder
{
    public function run()
    {
        // Truncate the existing records
        BarangMasuk::truncate();

        $csvFile = fopen(base_path("database/data/barang_masuk.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                BarangMasuk::create([
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
