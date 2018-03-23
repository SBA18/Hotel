<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Room::truncate();
        foreach(range(1, 20) as $i) {
            Room::create([
            	'number' => rand(101, 250),
            	'type_id' => rand(1, 4),
            	'persons' => rand(1, 4),
            	'location' => "B1F2L",
                'status' => "Free",
            ]);
        }
    }
}
