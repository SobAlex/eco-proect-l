<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $slide1 = Post::find(35);
        $slide2 = Post::find(30);
        $slide3 = Post::find(36);

        return view('main', compact('slide1', 'slide2', 'slide3'));
    }
}
