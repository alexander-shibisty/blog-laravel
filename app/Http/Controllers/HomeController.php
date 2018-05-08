<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        View::share('title', 'User account');
        View::share('description', 'User account');

        return view('home', compact('user'));
    }
}
