<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        // Truncate the existing records
        Transaksi::truncate();

        $csvFile = fopen(base_path("database/data/transaksi.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Transaksi::create([
                    "Tanggal"       => $data[0],
                    "No_Nota"       => $data[1],
                    "Penerima"      => $data[2],
                    "Kode_Barang"   => $data[3],
                    "Keterangan"    => $data[4],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
