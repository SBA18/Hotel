<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Type::truncate();

        Type::create([
            'name' => "Single",
            'user_id' => 1,
        ]);
        Type::create([
            'name' => "Double",
            'user_id' => 1,
        ]);
        Type::create([
            'name' => "Familly",
            'user_id' => 1,
        ]);
        Type::create([
            'name' => "Couple",
            'user_id' => 1,
        ]);
    }
}
