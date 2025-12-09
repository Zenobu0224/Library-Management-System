<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'student_id',
        'last_name',
        'first_name',
        'middle_name',
        'email',
        'course',
        'year_level'
    ];

    // student-transaction relationship
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'student_id', 'student_id');
    }
}
