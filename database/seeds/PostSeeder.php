<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 7; $i++) {

            $post = new Post();
            $post->title = $faker->sentence(10);
            $post->subtitle = $faker->sentence();
            $post->author = $faker->name();
            $post->body = $faker->realTextBetween(160, 200);
            $post->poster = $faker->imageUrl(400, 300, 'Articles');
            $post->save();
        }
    }
}
