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

    /** List all students of the subject */
    public function students():BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }

    /** The lecturer has taught this subject */
    public function lecturer():BelongsTo
    {
        return $this->belongsTo(Lecturer::class);
    }

    /** List all lectures */
    public function lectures():HasMany
    {
        return $this->hasMany(Lecture::class);
    }

    /** List all assignments */
    public function assignments():HasMany
    {
        return $this->hasMany(Assignment::class);
    }
}
