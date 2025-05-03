<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentsFactory> */
    use HasFactory;
    protected $primaryKey = 'departmentID';
    public $incrementing = true;
    
    protected $fillable = ['name', 'office'];

}
