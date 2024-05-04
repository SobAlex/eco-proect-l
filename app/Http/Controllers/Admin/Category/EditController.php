<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{

    public function __invoke($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('admin.category.edit', compact('category'));
    }
}
