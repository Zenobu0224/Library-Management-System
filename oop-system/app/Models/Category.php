<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'isActive',
        'date_added'
    ];

    // category relationship
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
