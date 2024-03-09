<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = User::find(1);
        return view('admin.home', compact('user'));
    }
}
