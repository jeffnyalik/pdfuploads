<?php

namespace Database\Seeders;

use App\Model\roles\RoleUser;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = \Faker\Factory::create();
        for ($i=0; $i<5 ; $i++) {
            RoleUser::create([
                'role_id' => rand(1, 5),
                'user_id' => rand(1, 5),
            ]);
        }
    }
}
