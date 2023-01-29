<?php

namespace Database\Seeders;

use App\Models\PollOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Create test poll options (Note: PollSeeder needs to be ran before this) */
        
        // Create options for Poll id: 1 (favorite color poll)
        PollOption::factory()->createMany([
            [
                'poll_id' => 1,
                'option' => "Red"
            ],
            [
                'poll_id' => 1,
                'option' => "Blue"
            ],
            [
                'poll_id' => 1,
                'option' => "Black"
            ]
        ]);

        // Create options for Poll id: 2 (favorite food poll)
        PollOption::factory()->createMany([
            [
                'poll_id' => 2,
                'option' => "Pizza"
            ],
            [
                'poll_id' => 2,
                'option' => "Pasta"
            ],
            [
                'poll_id' => 2,
                'option' => "Lasagna"
            ],
        ]);
    }
}
