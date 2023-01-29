<?php

namespace Database\Seeders;

use App\Models\Poll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 2 Test Polls
        Poll::factory()->create([
            'name'     => 'What is your favorite color?',
            'position' => 1
        ]);

        Poll::factory()->create([
            'name'     => 'What is your favorite food out of the ones below?',
            'position' => 2
        ]);
    }
}
