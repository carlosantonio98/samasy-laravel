<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Manzana13.')
        ])->assignRole('Admin');
        
        User::create([
            'name' => 'Seller One',
            'email' => 'sellerone@sellerone.com',
            'password' => bcrypt('Manzana13.')
        ])->assignRole('Seller');
        
        User::create([
            'name' => 'Seller Two',
            'email' => 'sellertwo@sellertwo.com',
            'password' => bcrypt('Manzana13.')
        ])->assignRole('Seller');
    }
}
