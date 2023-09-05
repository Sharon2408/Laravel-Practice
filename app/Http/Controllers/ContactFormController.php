<?php

namespace App\Http\Controllers;
use App\Events\NewUserEvent;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactFormController extends Controller
{
    public function create(){
        return view('Customers.contactform');
    }

    public function store(){
        
    $data=request()->validate([
             'name' => 'required|string',
             'email' => 'required|email',
             'message' => 'required'
             ]);
            Mail::to($data['email'])->send(new ContactFormMail($data));
            return redirect('Customers/contactform')->with('action-feedback', 'Message ,received... Will get back soon....');
    
            
        }

    
}
