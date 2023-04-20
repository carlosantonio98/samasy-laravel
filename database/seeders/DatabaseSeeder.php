<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('qrcodes');
        Storage::makeDirectory('qrcodes');  // crea esta carpeta en el storage

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
