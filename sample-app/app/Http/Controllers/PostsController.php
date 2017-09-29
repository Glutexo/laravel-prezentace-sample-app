<?php

namespace App\Http\Controllers;

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
        $posts = [
            'Laravel je bezva! ❤️',
            'Jsme na Developer Day.',
            'Vítejte v Havlíčkově Brodě.'
        ];

        return view('posts', compact('posts'));
    }
}
