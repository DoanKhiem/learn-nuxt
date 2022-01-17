<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelfs extends Model
{
    use HasFactory;
    protected $table = 'shelfs';
    protected $fillable = [
        'name',
        'note'
    ];
    public function numberOfShelfs()
    {
        return $this->hasMany(Books::class, 'shelf_id', 'id');
    }

    public function scopeSearch($query){
        if ($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
}
