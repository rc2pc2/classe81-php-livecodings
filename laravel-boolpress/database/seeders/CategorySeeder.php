<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $categories = ['News', 'Sport', 'Politics', 'Full-stack', 'Economy', 'Front-End', 'Design', 'Devops', 'Security'];

        foreach ($categories as $categoryName) {
            $category = new Category();
            $category->name = $categoryName;
            $category->color = $faker->unique()->hexColor();
            $category->save();
        }

    }
}
