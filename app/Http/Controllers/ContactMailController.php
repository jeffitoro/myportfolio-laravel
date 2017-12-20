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
            'nom' => 'Jeff',
            'email' => 'jeff-oro@hotmail.com',
            'message' => 'Je voulais vous dire que votre site est magnifique !'
        ];
        
        
        Mail::to('jeff-oro@hotmail.com')->send(new ContactMail($contact));
        return view('confirm');
    }
}
