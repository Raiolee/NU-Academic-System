<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    /** @use HasFactory<\Database\Factories\CoursesFactory> */
    use HasFactory;
    public function instructor()
    {
        return $this->belongsTo(instructors::class, 'instructorID', 'instructorID');
    }

    public function department()
    {
        return $this->belongsTo(departments::class, 'departmentID', 'departmentID');
    }

    public function students()
    {
        return $this->belongsToMany(students::class, 'course_student', 'courseID', 'studentID');
    }

    protected $fillable = ['title', 'instructorID', 'departmentID', 'credit'];
    protected $primaryKey = 'courseID';
    public $incrementing = true;
}
