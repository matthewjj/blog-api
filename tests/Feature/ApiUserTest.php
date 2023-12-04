<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiUserTest extends TestCase
{
    /**
     * A test to create user.
     */
    public function test_can_create_user(): void
    {
        $response = $this
            ->withHeaders(['Accept' => 'application/json'])
            ->post('/api/users', [
                'name' => 'test user',
                'email' => 'hello@email.com',
                'password' => 't@st!234*'
            ]);

        $response->assertStatus(200)->assertJson([
            'created' => true
        ]);
    }


    /**
     * A test to create user with returning token.
     */
    public function test_can_create_user_with_returning_token(): void
    {
        $response = $this
            ->withHeaders(['Accept' => 'application/json'])
            ->post('/api/users', [
                'name' => 'test user',
                'email' => 'hello2@email.com',
                'password' => 't@st!233*'
            ]);

        $response->assertStatus(200)->assertJson([
            'token' => true
        ]);
    }
}
