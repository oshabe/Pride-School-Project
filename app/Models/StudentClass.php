<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'year_id',
        'class_id',
        'status',
        'created_by',
        'updated_by'
    ];
}
