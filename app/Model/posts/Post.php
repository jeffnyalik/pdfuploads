<?php

namespace App\Model\posts;

use App\Model\comments\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
