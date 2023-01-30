<?php

namespace Tests\Feature;

use App\Models\Poll;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class PollTest extends TestCase
{
    /**
     * Test that user can vote on a poll if they haven't responded already.
     *
     * @return void
     */
    public function test_user_can_vote()
    {
        $user = User::factory()->create();

        Auth::shouldReceive('user')->once()->andReturn($user);

        $poll = Poll::factory()->create([
            'name'     => 'Which sport do you prefer?',
            'position' => 1
        ]);

        $this->assertTrue($poll->user_can_vote);
    }

    /**
     * Test that user cannot vote on a poll if they have responded already.
     *
     * @return void
     */
    public function test_user_cannot_vote()
    {
        $user = User::factory()->create();

        Auth::shouldReceive('user')->once()->andReturn($user);

        $poll = Poll::factory()->create([
            'name'     => 'Which sport do you prefer?',
            'position' => 1
        ]);

        $option = $poll->options()->create([
            'option'  => "Basketball"
        ]);

        $option->responses()->create([
            'user_id' => $user->id
        ]);

        $this->assertFalse($poll->user_can_vote);
    }
}
