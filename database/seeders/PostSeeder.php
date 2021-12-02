<?php

namespace Database\Seeders;

use App\Model\posts\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i< 10; ++$i){
            Post::create([
                'title' => $faker->title,
            ]);
        }
    }
}
