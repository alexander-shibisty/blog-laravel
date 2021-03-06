<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        factory(App\Comment::class, 50)->create();
    }
}
