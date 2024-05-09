<?php

namespace App\Console\Commands;

use App\Service\AutomatorTaskService;
use Illuminate\Console\Command;

class AutomatorTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:automator-task {data*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create or update a new automator task';

    /**
     * Execute the console command to create or update an existing automator task 
     */
    public function handle()
    {
        $data = $this->argument('data');
        $createService = new AutomatorTaskService();
        if ($createService->createTask($data)) {
            // push to processflow service and form builder service 
            $this->info("Task created successfully");
        } else {
            $this->info("Sorry could not create or update task");
        }
    }
}
