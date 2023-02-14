<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = array('title', 'type', 'cooking_time', 'weight', 'description', 'image_specific', 'image_package', 'image_raw');
}
