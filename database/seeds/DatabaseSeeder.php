<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laracasts\TestDummy\Factory::$factoriesPath = 'database/factories';

        $this->call([
            PostsSeeder::class,
            CommentsSeeder::class,
        ]);
    }
}
