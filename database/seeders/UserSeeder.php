<?php

namespace Database\Seeders;

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('pass123$');

        for($i = 0; $i < 10; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
