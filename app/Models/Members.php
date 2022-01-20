<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = [
        'name',
        'phone',
        'avatar',
        'sex',
        'department_id',
        'member_role_id',
        'birthday',
        'status',
        'note',
        'facebook',
    ];

    public function memberToDepartment(){
        return $this->hasOne(Departments::class, 'id', 'department_id');
    }
    public function memberToMemberRole(){
        return $this->hasOne(Member_role::class, 'id', 'member_role_id');
    }
}
