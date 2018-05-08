<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use View;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $posts = Post::select()->where('publicated', 1)->orderBy('id', 'DESC')->paginate(10);

        View::share('title', 'Posts');
        View::share('description', 'Posts');

        return view('posts', compact('posts'));
    }

    public function item(Request $request) {
        $post = Post::where('id', $request->id)->where('publicated', 1)->firstOrFail();

        View::share('title', $post->title ? $post->title : $post->name);
        View::share('description', $post->description ? $post->description : str_limit($post->content, 200, '...'));

        return view('post', compact('post'));
    }
}
