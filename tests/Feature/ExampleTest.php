<?php

namespace Tests\Feature;

use App\Enums\Users\Role;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->assertDatabaseHas('users', [
            'name'     => 'Test User 1',
            'email'    => 'test@example.com',
        ]);
    }
}
