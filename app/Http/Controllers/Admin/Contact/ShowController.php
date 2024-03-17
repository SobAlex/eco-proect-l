<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use PSpell\Config;

class ShowController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function __invoke(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }
}
