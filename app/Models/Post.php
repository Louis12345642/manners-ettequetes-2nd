<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Post extends Model
{
    use HasFactory, HasSlug;


    protected $fillable =['user_id','body','category_id','title','excerpt','slug'];



    // Str::limit($string, $limit, '...')

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

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
