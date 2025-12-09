<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'date_returned',
    ];

    protected $casts = [
        'date_borrowed' => 'date',
        'due_date' => 'date',
        'date_returned' => 'date',
        'date_added' => 'datetime',
    ];

    // Scope to get overdue transactions
    public function scopeOverdue($query)
    {
        return $query->whereNull('date_returned')
                    ->where('due_date', '<', Carbon::today());
    }

    // Scope to get active transactions (not returned)
    public function scopeActive($query)
    {
        return $query->whereNull('date_returned');
    }

    // Add these relationships
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}