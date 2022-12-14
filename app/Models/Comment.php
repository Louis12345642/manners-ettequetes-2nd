<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable =['user_id','body','post_id'];

    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }

    public function  CommentAuthor(){
        return $this->belongsTo(User::class,'user_id');
    }
}
