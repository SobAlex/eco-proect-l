<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderBy('id', 'DESC')->get();

        return view('admin.post.index', compact('posts'));
    }
}