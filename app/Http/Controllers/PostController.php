<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();

        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = Post::firstOrCreate([
            'SEO_title' => request('SEO_title'),
            'SEO_description' => request('SEO_description'),
            'title' => request('title'),
            'content' => request('content'),
            'image' => request('image'),
        ]);

        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $post = Post::updateOrCreate([
            'SEO_title' => request('SEO_title'),
            'SEO_description' => request('SEO_description'),
            'title' => request('title'),
            'content' => request('content'),
            'image' => request('image'),
        ]);

        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
