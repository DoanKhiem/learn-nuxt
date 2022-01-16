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
        'image',
        'note'
    ];
    public function scopeSearch($query){
        if ($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }

    public function bookToCategory()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }

    public function bookToShelf()
    {
        return $this->hasOne(Shelfs::class, 'id', 'shelf_id');
    }
}
