<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class ApiPostTest extends TestCase
{
    /**
     * unauthorised user cant post.
     */
    public function test_unauthenticated_user_cannot_post(): void
    {
        $response = $this
            ->withHeaders(['Accept' => 'application/json'])
            ->post('/api/posts');

        $response->assertStatus(401);
    }

    /**
     * authorised user can post.
     */
    public function test_authenticated_user_can_post(): void
    {
        $user = Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );

        $response = $this
            ->withHeaders(['Accept' => 'application/json'])
            ->post('/api/posts', [
                'user_id' => $user->id,
                'content' => 'Example post'
        ]);

        $response->assertStatus(200);
    }
}
