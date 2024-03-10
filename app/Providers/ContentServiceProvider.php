<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public $catMenuItems;

    public $postsCat1MenuItems;
    public $postsCat2MenuItems;
    public $postsCat3MenuItems;
    public $postsCat4MenuItems;

    public $cat1MenuItem;
    public $cat2MenuItem;
    public $cat3MenuItem;
    public $cat4MenuItem;

    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->cat1MenuItem = Category::find(1);
        $this->cat2MenuItem = Category::find(2);
        $this->cat3MenuItem = Category::find(3);
        $this->cat4MenuItem = Category::find(4);

        $this->postsCat1MenuItems = Post::where('category_id', $this->cat1MenuItem->id)->get();
        $this->postsCat2MenuItems = Post::where('category_id', $this->cat2MenuItem->id)->get();
        $this->postsCat3MenuItems = Post::where('category_id', $this->cat3MenuItem->id)->get();
        $this->postsCat4MenuItems = Post::where('category_id', $this->cat4MenuItem->id)->get();

        $this->catMenuItems = Category::all();

        view()->composer('layouts.main', function ($view) {
            $view->with([
                'catMenuItems' => $this->catMenuItems,
                'postsCat1MenuItems' => $this->postsCat1MenuItems,
                'postsCat2MenuItems' => $this->postsCat2MenuItems,
                'postsCat3MenuItems' => $this->postsCat3MenuItems,
                'postsCat4MenuItems' => $this->postsCat4MenuItems,
                'cat1MenuItem' => $this->cat1MenuItem,
                'cat2MenuItem' => $this->cat2MenuItem,
                'cat3MenuItem' => $this->cat3MenuItem,
                'cat4MenuItem' => $this->cat4MenuItem,
            ]);
        });
    }
}
