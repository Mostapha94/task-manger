<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_task_successfully()
    {
        $payload = [
            'title' => 'Sample Task',
            'description' => 'Task description',
            'status' => 'To Do',
            'priority' => 'High',
        ];

        $response = $this->postJson('/api/tasks', $payload);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'message',
                'data' => [
                    'id',
                    'title',
                    'description',
                    'status',
                    'priority',
                    'created_at',
                    'updated_at'
                ]
            ]);
    }
}
