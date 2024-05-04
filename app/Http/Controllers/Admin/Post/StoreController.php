<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if ($request->has('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/post/';
            $file->move($path, $filename);
        };

        $post = Post::firstOrCreate([
            'SEO_title' => $request->SEO_title,
            'SEO_description' => $request->SEO_description,
            'slug' => $request->slug,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'image' => $path . $filename,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('admin.post.index');
    }
}
