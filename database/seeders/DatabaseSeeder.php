<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BarangKeluarSeeder;
use Database\Seeders\BarangMasukSeeder;
use Database\Seeders\BarangRusakSeeder;
use Database\Seeders\BarangSeeder;
use Database\Seeders\StokBarangSeeder;
use Database\Seeders\TransaksiSeeder;
use Database\Seeders\KategoriSeeder;
use Database\Seeders\SatuanSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(KategoriSeeder::class);
        $this->call(SatuanSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(BarangKeluarSeeder::class);
        $this->call(BarangMasukSeeder::class);
        $this->call(BarangRusakSeeder::class);
        $this->call(TransaksiSeeder::class);
        $this->call(UserSeeder::class);
    }
}
