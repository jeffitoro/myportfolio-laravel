<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactMailController extends Controller
{
    public function create(){
        return view('email.contact');
    }

    public function store(ContactRequest $request){
        $contact = [
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message')
        ];
        $request->session()->flash('alert-success', 'Message is sended');      
        Mail::to(request('email'))->send(new ContactMail($contact));
        return redirect('/home');
    }
}
