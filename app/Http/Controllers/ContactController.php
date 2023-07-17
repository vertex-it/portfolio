<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactUs;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('info@vertex-it.com')->send(new ContactUs($request->validated()));

        Contact::create($request->validated());

        session()->flash('success', 'Thank you for contacting us, we will get back to you as soon as possible.');

        return back();
    }
}
