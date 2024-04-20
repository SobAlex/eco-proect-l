<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $messages = Message::all();

        return view('admin.message.index', compact('messages'));
    }
}
