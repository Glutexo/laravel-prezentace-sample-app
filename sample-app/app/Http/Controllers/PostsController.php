<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostsController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $posts = Post::latest()->get();
//        $posts = Post::oldest()->get();
//        $posts = Post::inRandomOrder()->get();
//        $posts = [Post::latest()->first()];

        return view('posts', compact('posts'));
    }
}
