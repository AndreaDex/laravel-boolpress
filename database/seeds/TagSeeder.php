<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Art', 'Business', 'Comics', 'Design', 'Education', 'Family', 'Fitness', 'Food', 'Humor', 'Internet'];

        foreach ($tags as $tag) {
            $new = new Tag();
            $new->name = $tag;
            $new->slag = Str::slug($tag);
            $new->save();
        }
    }
}
