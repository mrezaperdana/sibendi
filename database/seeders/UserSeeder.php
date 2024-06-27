<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //
        User::truncate();

        $csvFile = fopen(base_path("database/data/user.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    "id"                => $data['0'],
                    "name"              => $data['1'],
                    "username"          => $data['2'],
                    "email"             => $data['3'],
                    "nohp"              => $data['4'],
                    "picture"           => $data['5'],
                    "role"              => $data['6'],
                    "kodeinstansi"      => $data['7'],
                    "password"          => $data['8'],
                    "remember_token"    => $data['9'],
                    "email_verified_at" => $data['10']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
