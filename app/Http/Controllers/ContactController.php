<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([

            'name'=>'required|string|max:100',
            'email'=>'required|string|max:50',
            'subject'=>'required|string|max:50',
            'message'=>'required|string|max:255',
            
        ]);

     Contact::create($data);
     return redirect()->route('contact');
    }

    public function send(Request $request){

        $data = $request->validate([

            'name'=>'required|string|max:100',
            'email'=>'required|string|max:50',
            'subject'=>'required|string|max:50',
            'message'=>'required|string|max:255',
            
        ]);
     Mail::to('esraahedia39@gmail.com')->send(new ContactMail($data));
     return redirect()->route('contact');
    }
}
