<?php

namespace App\Model\comments;

use App\Model\posts\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
