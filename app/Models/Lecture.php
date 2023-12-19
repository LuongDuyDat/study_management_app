<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    /* The table associated with the Model */
    protected $table = "lecture";

    /* The attributes can be mass assignment */
    protected $fillable = ['lecture_file', 'start_at', 'end_at'];

    /* The primay key */
    protected $primayKey = "lecture_id";
}
