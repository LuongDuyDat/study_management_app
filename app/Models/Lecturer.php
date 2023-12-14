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
    protected $primayKey = 'lecturer_id';

    /** Get the subject that taught by the lecturer */
    public function subjects():HasMany
    {
        return $this->hasMany(Subject::class);
    }

    /** Get all the assignments of the lecturer */
    public function assignments():HasManyThrough
    {
        return $this->hasManyThrough(Subject::class, Assignment::class);
    }

    /** Get all the lectures of the lecturer*/
    public function lectures():HasManyThrough
    {
        return $this->hasManyThrough(Subject::class, Lecture::class);
    }
}
