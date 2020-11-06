<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
     * @param \App\Models\Post $post
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $post)
    {
        return view('home', [
            "posts" => $post->with('user')->withCount(['comments', 'likes'])->get(),
        ]);
    }
}
