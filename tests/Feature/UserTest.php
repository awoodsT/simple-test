<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    public function test_user_submit_form(): void
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'test name',
            'email' => Str::random(7) . '@email.com',
            'message' => 'test message....'
        ]);

        $response->assertStatus(200);
    }


    public function test_user_submit_form_with_error(): void
    {
        $response = $this->postJson('/api/submit', [
            'email' => Str::random(7) . '@email.com',
            'message' => 'test message....'
        ]);

        $response->assertStatus(422);
    }
}
