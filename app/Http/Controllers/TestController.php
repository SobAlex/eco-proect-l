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
    }
}
