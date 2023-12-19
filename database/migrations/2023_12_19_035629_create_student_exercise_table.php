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
        Schema::create('student_exercise', function (Blueprint $table) {
            $table->id('exercise_id');
            $table->float('result');
            $table->text('comment');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('assignment_id')->unsigned();
            $table->timestamps();
            $table->foreign('student_id')->references('student_id')->on('student');
            $table->foreign('assignment_id')->references('assignment_id')->on('assignment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_exercise');
    }
};
