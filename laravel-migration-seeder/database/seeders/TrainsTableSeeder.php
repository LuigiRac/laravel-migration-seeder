<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for ($i=0; $i < 15 ; $i++) { 
            $newTrain = new Train();

            $newTrain -> company = $faker -> company;
            $newTrain -> departure_station = $faker -> city;
            $newTrain -> arrival_station = $faker -> city;
            $newTrain -> departure_time = $faker->dateTimeThisMonth();
            $newTrain -> arrival_time = $faker->dateTimeThisMonth('+1 week');
            $newTrain -> train_code = $faker -> bothify('????-####');
            $newTrain -> total_carriages = $faker -> numberBetween(1,6);
            $newTrain -> is_on_time = $faker -> boolean;
            $newTrain -> is_cancelled = $faker -> boolean;

            $newTrain -> save();

        }

    }
}
