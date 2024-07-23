<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(ContactRequest $request)
    {
        $validatedData = $request->validated();


        Mail::to('moatazgamal100100@gmail.com')->send(new ContactFormMail($validatedData));

        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }
}
