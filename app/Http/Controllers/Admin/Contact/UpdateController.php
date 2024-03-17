<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\UpdateRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\File;

class UpdateController extends Controller
{

    /**
     * Update the specified resource in storage.
     */
    public function __invoke(UpdateRequest $request, $id)
    {
        $data = $request->validated();

        $contact = Contact::find($id);

        $path = 'uploads/contact/';
        $filename = 'default.jpg';

        if ($request->hasFile('logo')) {

            $destination = $path . $contact->logo;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($path, $filename);
        };

        $contact->update([
            'logo' => $path . $filename,
            'name_firm' => $request->name_firm,
            'slogan' => $request->slogan,
            'adress' => $request->adress,
            'work_time' => $request->work_time,
            'tel_work' => $request->tel_work,
            'tel_mob' => $request->tel_work,
            'email' => $request->email,
        ]);

        return redirect('/admin/contacts/' . $contact->id);
    }
}
