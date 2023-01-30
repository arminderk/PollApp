<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A user's default role should be 'user'.
     *
     * @return void
     */
    public function test_default_role_is_user()
    {
        $user = User::factory()->create();
        
        $this->assertEquals($user->role, 'user');
    }
}
