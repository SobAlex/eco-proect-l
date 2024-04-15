<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, $id)
    {

        dd($request);

        $data = $request->validated();

        $category = Category::find($id);

        $path = 'uploads/category/';
        $filename = 'default.jpg';

        if ($request->has('image')) {

            $destination = $path . $category->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }


            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        };

        $category->update([
            'SEO_title' => $request->SEO_title,
            'SEO_description' => $request->SEO_description,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path . $filename,
        ]);

        return redirect('/admin/categories/' . $category->id);
    }
}
