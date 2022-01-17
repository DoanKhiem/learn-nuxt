<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'note'
    ];

    public function numberOfBooks()
    {
        return $this->hasMany(Books::class, 'category_id', 'id');
    }

    public function scopeSearch($query){
        if ($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
}
