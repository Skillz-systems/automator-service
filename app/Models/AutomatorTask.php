<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutomatorTask extends Model
{
    use HasFactory;

    protected $fillable = [
        "processflow_history_id",
        "formbuilder_data_id",
        "customer_id",
        "user_id",
        "processflow_id",
        "processflow_step_id",
        "task_status",
    ];
}
