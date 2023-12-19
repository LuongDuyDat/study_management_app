<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    /* The table associated with the Model */
    protected $table = 'subject';

    /* The primary key */
    protected $primaryKey = 'subject_id';

    /* The attributes can be mass assignment */
    protected $fillable = ['id', 'name', 'credit_number', 'start_date', 'end_date'];

    /** List all students of the subject */
    public function students():BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_subject', 'subject_id', 'student_id');
    }

    /** The lecturer has taught this subject */
    public function lecturer():BelongsTo
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id');
    }

    /** List all lectures */
    public function lectures():HasMany
    {
        return $this->hasMany(Lecture::class, 'subject_id');
    }

    /** List all assignments */
    public function assignments():HasMany
    {
        return $this->hasMany(Assignment::class, 'subject_id');
    }
}
