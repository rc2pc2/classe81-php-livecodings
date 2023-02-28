<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'color' ];

    // guarda che tu hai qualcuno che dipende da te, una serie di post
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
