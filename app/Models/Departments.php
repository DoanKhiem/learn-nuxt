<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $fillable = [
        'name',
        'note'
    ];

    public function scopeSearch($query){
        if ($key = request()->key){
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
    public function numberOfMembers()
    {
        return $this->hasMany(Members::class, 'department_id', 'id');
    }

}
