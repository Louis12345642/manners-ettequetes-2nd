<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['user_id','body'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getRouteKeyName()
{
    return 'slug';
}

public function scopeFilter($query, array $filters)
{
    $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query) =>
            $query->where('body', 'like', '%' . $search . '%')

        )
    );
}
public function comment(){
    return $this->hasMany(Comment::class,'post_id');

}

// public function commentAuthor(){
//     return $this->belongsTo(User::class);

// }

}
