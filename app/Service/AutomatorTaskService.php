<?php

namespace App\Service;

use App\Models\AutomatorTask;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class AutomatorTaskService
{
    /**
     * Create a new user.
     *
     * @param Array $data  holds valid data for the new task.
     *
     * @return \App\Models\AutomatorTask \ Illuminate\Support\MessageBag The created user model & MessageBag when there is an error.
     */
    public function createTask($data)
    {
        $createTask = AutomatorTask::create($data);
        return $createTask;
    }
}
