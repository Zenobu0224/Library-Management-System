<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'isbn',
        'author',
        'category_id',
        'isActive',
        'date_added'
    ];

    protected $casts = [
        'isActive' => 'boolean',
        'date_added' => 'date',
    ];

    // Scope to get only active books
    public function scopeActive($query)
    {
        return $query->where('isActive', 1);
    }

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}