<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0 ; $i < 200; $i++){
            $newBook = new Book();
            $newBook->title= $faker->sentence(4, true);
            $newBook->author= $faker->name();
            $newBook->cover= $faker->imageUrl(250, 400);
            $newBook->save();
        }
    }
}
