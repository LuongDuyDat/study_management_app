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
        Schema::create('lecture', function (Blueprint $table) {
            $table->id('lecture_id');
            $table->text('lecture_file');
            $table->date('start_at');
            $table->date('end_at');
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
        Schema::dropIfExists('lecture');
    }
};
