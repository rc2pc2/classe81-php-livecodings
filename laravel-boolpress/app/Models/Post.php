<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'author', 'slug', 'title', 'post_date', 'content', 'image', 'category_id'
    ];

    // guarda che tu dipendi da qualcuno, ovvero da una singola categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function isImageAUrl(){
        return filter_var($this->image, FILTER_VALIDATE_URL);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
