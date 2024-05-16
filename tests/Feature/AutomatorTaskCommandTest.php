<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutomatorTaskCommandTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_that_task_is_created_from_command()
    {
        $data = [
            "title" => "just a title",
            "formbuilder_data_id" => 1,
            "customer_id" => 1,
            "user_id" => 1,
            "processflow_id" => 1,
            "processflow_step_id" => 1,
        ];
        $this->artisan('app:automator-task', [
            'data' => $data
        ])->expectsOutput('Task created successfully')
            ->assertExitCode(0);
    }
}
