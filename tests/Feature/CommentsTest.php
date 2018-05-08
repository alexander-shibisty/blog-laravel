<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHaveComments() {
        $response = $this->get(route('post', ['id' => \App\Post::where('posts.publicated', 0)->where('comments.publiceted', 1)->with('comments')->first()->id]));

        $response->assertStatus(200);
    }
}
