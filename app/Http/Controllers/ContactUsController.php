<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->query_type = $request->input('query');
        $contact->message = $request->input('message');
        $contact->save();
        return view('thank',['subject'=>'Thank You For Contact', 'message'=>'Your Message has been sent successfully.']);
    }
}
