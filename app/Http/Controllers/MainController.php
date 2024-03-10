<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $slide1 = Post::find(1);
        $slide2 = Post::find(2);
        $slide3 = Post::find(3);

        $categories = Category::all();

        return view('main', compact('slide1', 'slide2', 'slide3', 'categories'));
    }
}
