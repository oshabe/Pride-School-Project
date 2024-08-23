<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'roll_number',
        'name',
        'class_id',
        'year_id',
        'status',
        'created_by',
        'updated_by'
    ];
}
