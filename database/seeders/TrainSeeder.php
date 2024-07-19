<?php

namespace Database\Seeders;

use App\Models\Guest\Train;
use Faker\generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void{
        for ($i=0; $i < 20  ; $i++) {
        $newTrain = new Train();
        $newTrain->agency = $faker->company();
        $newTrain->departure_station = $faker->country();
        $newTrain->arrival_station = $faker->country();
        $newTrain->departure_time = $faker->dateTime();
        $newTrain->agenarrival_timecy = $faker->dateTime();
        $newTrain->code_train = $faker->bothify('?-####');
        $newTrain->n_carriages = $faker->numberBetween(0, 40);
        $newTrain->is_in_time = $faker->boolean();
        $newTrain->is_canceled = $faker->boolean();
        $newTrain->save();
        }

    }
}
