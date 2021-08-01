<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $dates = [
        'start_date',
        'end_date'
    ];

    public function students()
    {
        return $this->belongsToMany(
            Student::class,
            'course_participants',
            'course_id',
            'student_id',
        );
    }
}
