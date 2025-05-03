<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    /** @use HasFactory<\Database\Factories\StudentsFactory> */
    use HasFactory;

    protected $primaryKey = 'studentID'; // if your primary key is not 'id'
    protected $fillable = ['name', 'departmentID'];

    public function department()
    {
        return $this->belongsTo(departments::class, 'departmentID', 'departmentID');
    }
    public function courses()
{
    return $this->belongsToMany(courses::class, 'course_student', 'studentID', 'courseID');
}

}
