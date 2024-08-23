<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolFees extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'term_id',
        'amount_payed',
        'date',
        'payment_status',
        'created_by',
        'updated_by'
    ];
}
