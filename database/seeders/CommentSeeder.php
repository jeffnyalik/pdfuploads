<?php

namespace Database\Seeders;

use App\Model\comments\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i++){
            Comment::create([
                'comment' => $faker->sentence,
                'post_id' => rand(1, 10)
            ]);
        }
    }
}
