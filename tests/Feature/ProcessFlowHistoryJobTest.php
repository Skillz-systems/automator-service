<?php

namespace Tests\Feature;

use App\Jobs\ProcessflowServiceJobs\ProcessflowHistoryJob;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Queue;

class ProcessFlowHistoryJobTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_it_handles_automation_task_creation_job(): void
    {
        Queue::fake();

        $data = [
            "formbuilder_data_id" => 1,
            "customer_id" => 1,
            "user_id" => 1,
            "processflow_id" => 1,
            "processflow_step_id" => 1,
        ];

        $job = new ProcessflowHistoryJob($data);
        $job->handle();

        $this->assertDatabaseCount('automator_tasks', 1);
        $this->assertDatabaseHas('automator_tasks', $data);
    }
    // public function test_it_dispatches_department_creation_job_functionality(): void
    // {
    //     Queue::fake();

    //     $request = [
    //         'name' => 'Mercury',
    //         'id' => 5634,
    //         'created_at' => '',
    //         'updated_at' => '',
    //     ];

    //     DepartmentCreated::dispatch($request);

    //     Queue::assertPushed(DepartmentCreated::class, function ($job) use ($request) {
    //         return $job->getData() == $request;
    //     });
    // }
}
