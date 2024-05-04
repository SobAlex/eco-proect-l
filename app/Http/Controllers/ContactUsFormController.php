<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Mail;

class ContactUsFormController extends Controller
{

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Message::create($request->all());
        //  Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('soboldev@yandex.ru', 'eco-proect-l')->subject($request->get('subject'));
        });

        // flash('Заявка успешно отправлена! Мы скоро свяжемся с вами.');

        // return view('/mail');
        return back()->with('success', 'Заявка успешно отправлена! Мы скоро свяжемся с вами.');
        // return back();
    }
}
