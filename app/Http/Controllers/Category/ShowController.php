<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke($slug)
    {

        $category = Category::where('slug', $slug)->first();

        $posts = $category->posts;

        return view('category.show', compact('category', 'posts'));
    }
}
