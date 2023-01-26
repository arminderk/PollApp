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
        // Create test poll options (Note: PollSeeder needs to be ran before this)
        PollOption::factory(8)->create();
    }
}
