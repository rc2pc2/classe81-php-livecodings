<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 80 ; $i++) {
            $movie = new Movie();
            $movie->title = $faker->unique()->sentence(4);
            $movie->authors = $faker->name();
            $movie->ranking = $faker->randomNumber(5);
            $movie->released = $faker->boolean(70);
            $movie->production_date = $faker->date();
            $movie->save();
        }
    }
}