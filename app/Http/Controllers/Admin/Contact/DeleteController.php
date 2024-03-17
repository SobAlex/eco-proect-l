<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return 'Del cont';
    }
}
