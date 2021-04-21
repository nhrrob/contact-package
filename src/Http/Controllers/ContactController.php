<?php

namespace Nhrrob\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Nhrrob\Contact\Mail\ContactMailable;
use Nhrrob\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function store(Request $request){
        try{
        
            Contact::create($request->all());
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name, $request->message));
            
            return redirect()->back()->with('success', 'Thanks for contacting with us. Your message has been sent!');   
        
        }catch(Exception $e){
        
            return redirect()->back()->with('success', $e->getMessage());   
        
        }
        
    }
}
