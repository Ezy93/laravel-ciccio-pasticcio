<?php

use Illuminate\Database\Seeder;
use App\Pasticcio;
use Faker\Generator as Faker;

class PasticciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newPasticcio = new Pasticcio();
            $newPasticcio->name = $faker->name();
            $newPasticcio->ingredients = $faker->words(3, true);
            $newPasticcio->price = $faker->randomFloat(2, 0, 99);
            $newPasticcio->save();
        }
    }
}