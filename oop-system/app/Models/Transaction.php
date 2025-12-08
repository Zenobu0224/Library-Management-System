<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'txn_no',
        'student_id',
        'book_id',
        'date_borrowed',
        'by',
        'date_added',
        'due_date',
    ];
}
