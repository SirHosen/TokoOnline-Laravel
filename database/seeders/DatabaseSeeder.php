<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // USER
        User::factory()->create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '08123456789',
            'password' => bcrypt('admin'),
        ]);
        User::factory()->create([
            'nama' => 'Hosea Oktarivanes',
            'email' => 'hosea@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '08234567890',
            'password' => bcrypt('hosea'),
        ]);

        // KATEGORI
    
    }
}
