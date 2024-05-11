<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('automator_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer("processflow_history_id")->nullable()->comment("This column would hold the processflow history id, which comes from processflow service");
            $table->integer("formbuilder_data_id")->nullable()->comment("This column would hold the formbuilder data id, which can comes from processflow service or from formbuilder service");
            $table->integer("customer_id")->nullable()->comment("This column would hold the customer id, which can comes from  formbuilder service or from automator service");
            $table->integer("user_id")->nullable()->comment("This column would hold the user id, which can comes from  processflow service or from automator service");
            $table->integer("processflow_id")->nullable()->comment("This column would hold the processflow id, which can comes from  processflow service or from automator service");
            $table->integer("processflow_step_id")->nullable()->comment("This column would hold the processflow step id, which can comes from  processflow service or from automator service");
            $table->integer("task_status")->default(0)->comment("This column would hold the status of the task, which could be 0 as pending or 1 as done");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automator_tasks');
    }
};
