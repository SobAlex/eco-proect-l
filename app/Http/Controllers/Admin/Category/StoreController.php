<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if ($request->has('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'public/uploads/category/';
            $file->move($path, $filename);
        };

        $category = Category::firstOrCreate([
            'SEO_title' => $request->SEO_title,
            'SEO_description' => $request->SEO_description,
            'slug' => $request->slug,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'image' => $path . $filename,
        ]);

        return redirect()->route('admin.category.index');
    }
}
