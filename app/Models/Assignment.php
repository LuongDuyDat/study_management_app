<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assignment extends Model
{
    use HasFactory;

    /*The table associate with the model */
    protected $table = 'assignment';

    /*The primary key */
    protected $primaryKey = 'assignment_id';

    /** Get all exercise that submitted by students */
    public function studentExercises():HasMany
    {
        return $this->hasMany(StudentExercise::class);
    }
}
