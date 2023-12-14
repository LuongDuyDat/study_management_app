<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;

    /* The table associated with the Model */
    protected $table = "student_subject";

    /* primary key not increment */
    protected $incrementing = false;

    /* no created_at and updated_at columns exist */
    protected $timestamps = false; 
}
