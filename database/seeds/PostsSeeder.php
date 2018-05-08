<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PostsSeeder extends Seeder
{
    public function run()
    {
        factory(App\Post::class, 50)->create();
    }
}
