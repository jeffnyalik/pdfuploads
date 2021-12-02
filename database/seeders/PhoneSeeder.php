<?php

namespace Database\Seeders;

use App\Model\phone\Phone;
use App\Model\User;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phone::truncate();
        $faker = \Faker\Factory::create();

        for($i =0; $i<10; $i++){
            Phone::create([
                'name' => $faker->name,
                'user_id' => rand(1, 10),
            ]);
        }
    }
}
