<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newValue = new Travel();
            $newValue->departure = $faker->word();
            $newValue->destination = $faker->word();
            $newValue->departureTime = $faker->randomNumber(2, false);
            $newValue->arrivalTime = $faker->randomNumber(2, false);
            $newValue->Price = $faker->randomNumber(5, false);
            $newValue->save();
        }
    }
}
