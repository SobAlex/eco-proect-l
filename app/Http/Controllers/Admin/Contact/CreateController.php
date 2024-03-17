<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function __invoke()
    {
        return view('admin.contact.create');
    }
}
