<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    protected $fillable = [
        'Year',
        'class_id',
        'status',
        'created_by',
        'updated_by'
    ];
}
