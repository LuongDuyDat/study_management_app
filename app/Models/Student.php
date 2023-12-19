<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    /* The table associate with the model */
    protected $table = 'student';

    /* The primary key*/
    protected $primaryKey = 'student_id';

    /* The atributes that can mass assignable */
    protected $fillable = ['name', 'class', 'email'];

    /** Get subjects that students learn */
    public function subjects():BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'student_subject', 'student_id', 'subject_id');
    }

    /**Get all exercise student have submitted */
    public function exercises():HasMany
    {
        return $this->hasMany(StudentExercise::class, 'student_id');
    }

}
