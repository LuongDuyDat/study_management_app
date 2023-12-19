<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentExercise extends Model
{
    use HasFactory;

    /* The Table associated with the Model */
    protected $table = 'student_exercise';

    /* The primay key */
    protected $primayKey = 'exercise_id';

    /* The attributes can be mass assignment */
    protected $fillable = ['result', 'comment'];

    /* List file in Student Exercise */
    public function exerciseFile():HasMany
    {
        return $this->hasMany(ExerciseFile::class, 'exercise_id');
    }

    /* Show this file belong to assignment */
    public function assignment():BelongsTo
    {
        return $this->belongsTo(Assignment::class, 'assignment_id');
    }
}
