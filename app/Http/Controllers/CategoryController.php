<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categories = Category::firstOrCreate([
            'SEO_title' => request('SEO_title'),
            'SEO_description' => request('SEO_description'),
            'title' => request('title'),
            'content' => request('content'),
            'image' => request('image'),
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = Category::updateOrCreate([
            'SEO_title' => request('SEO_title'),
            'SEO_description' => request('SEO_description'),
            'title' => request('title'),
            'content' => request('content'),
            'image' => request('image'),
        ]);

        return redirect('/categoreies/' . $category->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $post->delete();
        return redirect()->route('category.index');
    }
}
