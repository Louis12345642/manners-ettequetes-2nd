<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{



    use HasFactory,HasSlug;
    protected $fillable = ['title','slug'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
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
public function scopeFilter($query, array $filters)
{
    $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query) =>
            $query->where('slug', 'like', '%' . $search . '%')

        )
    );
}
}
