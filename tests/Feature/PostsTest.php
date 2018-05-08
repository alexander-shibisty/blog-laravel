<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMainPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testItemPage() {
        $response = $this->get(route('post', ['id' => \App\Post::where('publicated', 1)->first()->id]));

        $response->assertStatus(200);
    }

    public function testItem404Page() {
        $response = $this->get(route('post', ['id' => \App\Post::where('publicated', 0)->first()->id]));

        $response->assertStatus(404);
    }

    public function testRand404() {
        $response = $this->get('/'.str_random());

        $response->assertStatus(404);
    }
}
