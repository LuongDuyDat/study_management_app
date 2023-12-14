<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseFile extends Model
{
    use HasFactory;

    /*The table associated with the Model */
    protected $table = "exercise_file";

    /* The primary key */
    protected $primayKey = "exercise_file_id";
}
