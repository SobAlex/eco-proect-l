<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class EditController extends Controller
{



    /**
     * Show the form for editing the specified resource.
     */
    public function __invoke(Contact $contact)
    {
        $contact = Contact::find(1);
        return view('admin.contact.edit', compact('contact'));
    }
}
