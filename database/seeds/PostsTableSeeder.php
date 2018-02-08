<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 90)->create()->each(function ($post) {
            Log::debug(['Generate post: ' => $post->toArray()]);
        });
    }
}
