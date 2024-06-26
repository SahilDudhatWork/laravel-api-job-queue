<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_submission_api()
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test demo message.',
        ]);

        $response->assertStatus(200)
        ->assertJson([
            'status' => 'success',
            'code' => '200',
            'message' => 'Submission received.',
        ]);
    }
}
