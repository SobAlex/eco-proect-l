<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function __invoke(Post $post)
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
}
