<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 200 ; $i++) {
            $new_house_object = new House();
            $new_house_object->reference = $faker->bothify('??-########');
            $new_house_object->address = $faker->streetAddress();
            $new_house_object->postal_code = $faker->postcode();
            $new_house_object->city = $faker->city();
            $new_house_object->state = $faker->state();
            $new_house_object->square_meters = $faker->numberBetween(30, 1000);
            $new_house_object->rooms = $faker->numberBetween(1, 30);
            $new_house_object->bathrooms = $faker->numberBetween(1, 6);
            $new_house_object->type = $faker->randomElement(['monolocale', 'bilocale', 'appartamento', 'bifamigliare', 'attico', 'casa indipendente', 'villetta']);
            $new_house_object->description = $faker->paragraphs(5, true);
            $new_house_object->price = $faker->randomFloat(2, 20000, 15000000);
            $new_house_object->is_available = $faker->randomElement([true, false]);
            $new_house_object->energy_rating = $faker->randomElement(['a++', 'a', 'b', 'c', 'd', 'e', 'f']);
            $new_house_object->save();
        }
    }
}
