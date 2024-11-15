<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'email'
    ];

    protected $casts = [
        'date_of_birth' => 'date'
    ];
}