<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(Request $request)
    {
        return 'Store cont';
    }
}
