<?php

namespace Tests\Unit;

use App\Models\AutomatorTask;
use Tests\TestCase;
use App\Service\AutomatorTaskService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AutomatorServiceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test to create a new task using automatortaskservice
     */
    public function test_to_see_if_a_new_automatortask_can_be_created(): void
    {
        $data = [
            "formbuilder_data_id" => 1,
            "entity_id" => 1,
            "user_id" => 1,
            "processflow_id" => 1,
            "processflow_step_id" => 1,
            "title" => "just a title ",
            "entity_id" => 1,
            "entity_type" => "customer",
        ];
        $automatorService = (new AutomatorTaskService())->createTask($data);
        $this->assertDatabaseHas('automator_tasks', $data);
        $this->assertInstanceOf(AutomatorTask::class, $automatorService);
    }
}
