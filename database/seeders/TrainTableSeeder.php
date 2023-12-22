<?php

namespace Database\Seeders;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->unique(true);
        for ($i = 0; $i < 10; $i++) {
            $newtrain = new train();

            $newtrain->start_station = $faker->randomElement(['Napoli', 'Torino', 'Bologna', 'Roma', 'Milano']);
            $newtrain->arrival_station = $faker->randomElement(['Napoli', 'Torino', 'Bologna', 'Roma', 'Milano']);
            $newtrain->departure_time = $faker->time();
            $newtrain->arrival_time = $faker->time();
            $newtrain->train_code =$faker->text(15);
            $newtrain->carriage_number = (string)$faker->numberBetween(1,20);
            $newtrain->in_time = $faker->randomElement([true, false]);
            $newtrain->cancelled = $faker->randomElement([true, false]);

            $newtrain->save();
        }
    }
}
