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
                    'id' => $data[0],
                    'name' => $data[1],
                    'username' => $data[2],
                    'email' => $data[3],
                    'nohp' => $data[4] ?: null, // Handle nullable fields
                    'picture' => $data[5] ?: null,
                    'role' => $data[6],
                    'kodeinstansi' => $data[7] ?: null,
                    'password' => $data[8],
                    'IsAdminSibendi' => $data[9] ?: null,
                    'remember_token' => $data[10] ?: null,
                    'email_verified_at' => $data[11] ?: null,
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
