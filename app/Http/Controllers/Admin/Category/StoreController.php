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
            $path = 'uploads/category/';
            $file->move($path, $filename);
        };

        $category = Category::firstOrCreate([
            'SEO_title' => $request->SEO_title,
            'SEO_description' => $request->SEO_description,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path . $filename,
        ]);

        return redirect()->route('admin.category.index');
    }
}
