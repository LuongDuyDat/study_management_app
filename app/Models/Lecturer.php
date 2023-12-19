<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Lecturer extends Model
{
    use HasFactory;

    /* The table associated with the Model */
    protected $table = 'lecturer';

    /* The primary key */
    protected $primaryKey = 'lecturer_id';

    /* The attributes can be mass assignment */
    protected $fillable = ['name', 'email'];

    /** Get the subject that taught by the lecturer */
    public function subjects():HasMany
    {
        return $this->hasMany(Subject::class, 'lecturer_id');
    }

    /** Get all the assignments of the lecturer */
    public function assignments():HasManyThrough
    {
        return $this->hasManyThrough(Assignment::class, Subject::class, 'lecturer_id', 'subject_id', 'lecturer_id', 'subject_id');
    }

    /** Get all the lectures of the lecturer*/
    public function lectures():HasManyThrough
    {
        return $this->hasManyThrough(Lecture::class, Subject::class, 'lecturer_id', 'subject_id', 'lecturer_id', 'subject_id');
    }
}
