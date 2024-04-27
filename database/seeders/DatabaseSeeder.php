<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Haidar Gemink',
            'email' => 'haidar@haidar.com',
            'no_hp' => '081234567890',
            'alamat' => 'Jl. Haidar Gemink No. 1',
            'umur' => 20,
            'is_admin' => true,
            'password' => bcrypt('haidar123'),
        ]);
        User::factory()->create([
            'name' => 'Azzah Gemink',
            'email' => 'azzah@azzah.com',
            'no_hp' => '081234567890',
            'alamat' => 'Jl. azzah Gemink No. 1',
            'umur' => 20,
            'is_admin' => false,
            'password' => bcrypt('azzah123'),
        ]);
    }
}
