<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactMailController extends Controller
{
    public function create(){
        return view('email.contact');
    }

    public function store(Request $request){
        $contact = [
            'email' => request('selected'),
            'subject' => request('subject'),
            'message' => request('message')
        ];
        $request->session()->flash('alert-success', 'Message is sended');      
        Mail::to('jeff-oro@hotmail.com')->send(new ContactMail($contact));
        return redirect('/home');
    }
}
