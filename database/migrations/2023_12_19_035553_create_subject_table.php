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
        Schema::create('subject', function (Blueprint $table) {
            $table->id('subject_id');
            $table->string('id', 10);
            $table->string('name', 100);
            $table->integer('credit_number');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            $table->bigInteger('lecturer_id')->unsigned();
            $table->foreign('lecturer_id')->references('lecturer_id')->on('lecturer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject');
    }
};
