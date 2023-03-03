<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker )
    {
        //
        for ($i=0; $i < 600; $i++) {
            $newPost = new Post();
            $newPost->category_id = Category::inRandomOrder()->first()->id ;
            $newPost->title = $faker->realTextBetween(5, 30);
            $newPost->slug = Str::slug($newPost->title);
            // $newPost->author = $faker->name();
            $newPost->user_id = User::inRandomOrder()->first()->id;
            $newPost->content = $faker->realTextBetween(1600, 3000);
            $newPost->post_date = $faker->dateTimeThisYear();
            $newPost->image = $faker->unique()->imageUrl();
            $newPost->save();
        }
    }
}
