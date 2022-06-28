<?php

use App\Train;

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            # code...
            $new_Train = new Train();
            $new_Train -> company = $faker -> word();
            $new_Train -> departure_station = $faker -> city();
            $new_Train -> arrival_station = $faker -> city();
            $new_Train -> time_departure = $faker -> time();
            $new_Train -> time_arrival = $faker -> time();
            $new_Train -> train_code = $faker -> regexify('[A-Z]{5}[0-4]{3}');
            $new_Train -> wagons_number = $faker -> numberBetween(4, 18);
            $new_Train -> on_time = $faker -> boolean();
            $new_Train -> save();
        }

    }
}
