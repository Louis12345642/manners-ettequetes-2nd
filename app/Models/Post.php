<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function Author(){
        return $this->belongsTo(User::class);
    }
    public function authors(){
        return $this->belongsTo(Author::class);
    }
}
