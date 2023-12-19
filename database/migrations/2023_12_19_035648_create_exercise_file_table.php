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
        Schema::create('exercise_file', function (Blueprint $table) {
            $table->id('exercise_file_id');
            $table->text('exercise_file');
            $table->bigInteger('exercise_id')->unsigned();
            $table->timestamps();
            $table->foreign('exercise_id')->references('exercise_id')->on('student_exercise');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_file');
    }
};
