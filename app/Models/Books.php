<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'name',
        'book_code',
        'shelf_id',
        'category_id',
        'original_number',
        'current_quantity',
        'author',
        'note'
    ];
}
