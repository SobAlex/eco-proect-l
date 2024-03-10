<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $category1 = Category::find(1);
        $category2 = Category::find(2);
        $category3 = Category::find(3);
        $category4 = Category::find(4);

        $postsCat1 = Post::where('category_id', $category1->id)->take(4)->get();
        $postsCat2 = Post::where('category_id', $category2->id)->take(4)->get();
        $postsCat3 = Post::where('category_id', $category3->id)->take(4)->get();
        $postsCat4 = Post::where('category_id', $category4->id)->take(4)->get();

        return view('category.index', compact('category1', 'category2', 'category3', 'category4', 'postsCat1', 'postsCat2', 'postsCat3', 'postsCat4'));
    }
}
