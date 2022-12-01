<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug'];
    public function posts(){
        return $this->hasMany(Post::class,'category_id');
    }
    public function author(){
        return $this->BelongsTo(User::class,'category_id');
    }
    public function getRouteKeyName()
{
    return 'slug';
}
}
