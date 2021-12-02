<?php

namespace Database\Seeders;

use App\Model\roles\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();
        $faker = \Faker\Factory::create();

        for($i = 0 ; $i<5; ++$i){
            Role::create([
                'name' => $faker->name,
            ]);
        }
    }
}
