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
        Schema::create('work_step_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_id');
            $table->unsignedBigInteger('workstep_id');
            $table->unsignedBigInteger('action_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('value');
            $table->timestamps();

            $table->foreign('workstep_id')->references('id')->on('worksteps')->onDelete('cascade');
            $table->foreign('action_id')->references('id')->on('possible_actions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_step_results');
    }
};
