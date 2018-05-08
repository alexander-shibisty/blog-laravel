<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        $posts = Post::select()->orderBy('id', 'DESC')->paginate(10);

        return view('posts', compact('posts'));
    }

    public function item(Request $request) {
        $post = Post::where('id', $request->id)->firstOrFail();

        return view('post', compact('post'));
    }
}
