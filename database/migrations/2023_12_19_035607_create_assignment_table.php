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
        Schema::create('assignment', function (Blueprint $table) {
            $table->id('assignment_id');
            $table->text('title');
            $table->text('description');
            $table->text('assignment_file');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->bigInteger('subject_id')->unsigned();
            $table->timestamps();
            $table->foreign('subject_id')->references('subject_id')->on('subject');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment');
    }
};
