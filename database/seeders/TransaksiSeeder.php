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
                    "tanggal"       => $data[0],
                    "no_nota"       => $data[1],
                    "penerima"      => $data[2],
                    "kode_barang"   => $data[3],
                    "jumlah"   => $data[4],
                    "keterangan"    => $data[5],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
