<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class term extends Model
{
    use HasFactory;
    protected $fillable = [
        'term',
        'term_amount',
        'class_id',
        'year_id',
        'date',
        'status',
        'created_by',
        'updated_by'
    ];
}
