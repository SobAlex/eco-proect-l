<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // Все посты с определенной категорией
    // public function test(Category $category)
    // {
    //     $posts = $category->posts;

    //     dd($posts);
    // }

    // Категория определенного поста
    public function test($post)
    {
        $postEdit = Post::find($post);
        $category = $postEdit->category;

        dd($category);

        // Все категории по 4 поста
        $postsCats = Category::with([
            'posts' => function ($q) {
                $q->latest()->take(4);
            }
        ])->get();

        $postsCat1 = Category::where('id', $category1->id)->with([
            'posts' => function ($q) {
                $q->take(4);
            }
        ])->get();
    }
}
