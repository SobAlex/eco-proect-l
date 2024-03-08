<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(Request $request)
    {
        $categories = Category::firstOrCreate([
            'SEO_title' => request('SEO_title'),
            'SEO_description' => request('SEO_description'),
            'title' => request('title'),
            'content' => request('content'),
            'image' => request('image'),
        ]);

        return redirect()->route('admin.category.index');
    }
}
