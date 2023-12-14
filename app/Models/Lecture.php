<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    /* The table associated with the Model */
    protected $table = "lecture";

    /* The primay key */
    protected $primayKey = "lecture_id";
}
