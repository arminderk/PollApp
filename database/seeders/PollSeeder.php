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
        // Create 2 test Polls
        Poll::factory()->create([
            'name'  => 'Poll 1'
        ]);

        Poll::factory()->create([
            'name'  => 'Poll 2'
        ]);
    }
}
