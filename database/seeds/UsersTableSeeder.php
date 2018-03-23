<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Sawers SAW',
            'role' => 'admin',
            'email' => 'sawers@saw.com',
            'password' => bcrypt('secret')
        ]);
        $user->save();
    }
}
