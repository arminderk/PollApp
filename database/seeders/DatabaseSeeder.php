<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create test users
        User::factory(5)->create();

        // Create test admin
        User::factory()->create([
            'name'  => 'Test Admin',
            'email' => 'test_admin@example.com',
            'role'  => 'admin'
        ]);
    }
}
