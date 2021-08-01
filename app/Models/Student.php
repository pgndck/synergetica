<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'course_participants',
            'student_id',
            'course_id',
        );
    }
}
