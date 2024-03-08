<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();

        return view('admin.post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    public function create()
    {
        return view('admin.post.create');
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

        return redirect()->route('admin.post.index');
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
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

        return redirect('/admin/posts/' . $post->id);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
