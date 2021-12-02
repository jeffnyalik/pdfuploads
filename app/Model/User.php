<?php

namespace App\Model;

use App\Model\phone\Phone;
use App\Model\roles\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function phone(){
        return $this->hasOne(Phone::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
