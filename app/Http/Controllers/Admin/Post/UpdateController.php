<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, $id)
    {
        $data = $request->validated();

        $post = Post::find($id);

        $path = 'uploads/post/';
        $filename = 'default.jpg';

        if ($request->hasFile('image')) {

            $destination = $path . $post->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        };

        $post->update([
            'SEO_title' => $request->SEO_title,
            'SEO_description' => $request->SEO_description,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path . $filename,
            'category_id' => $request->category_id,
        ]);

        return redirect('/admin/posts/' . $post->id);
    }
}
