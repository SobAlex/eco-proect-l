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

        $postsCat1 = Category::where('id', $category1->id)->with([
            'posts' => function ($q) {
                $q->take(4);
            }
        ])->get();

        $postsCat2 = Category::where('id', $category2->id)->with([
            'posts' => function ($q) {
                $q->take(4);
            }
        ])->get();

        $postsCat3 = Category::where('id', $category3->id)->with([
            'posts' => function ($q) {
                $q->take(4);
            }
        ])->get();

        $postsCat4 = Category::where('id', $category4->id)->with([
            'posts' => function ($q) {
                $q->take(4);
            }
        ])->get();

        dd($postsCat2);

        return view('category.index', compact('category1', 'category2', 'category3', 'category4', 'postsCat1', 'postsCat2', 'postsCat3', 'postsCat4'));
    }
}
