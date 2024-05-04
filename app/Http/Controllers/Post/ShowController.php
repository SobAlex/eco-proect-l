<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{

    public function __invoke($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('post.show', compact('post'));
    }
}
