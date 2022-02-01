<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class pageController extends Controller
{
    public function contacts(){
        return view('guest.contacts.form');
    }
    public function SendContactForm(Request $request){

        ddd($request->all());

        $valdata = $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'body' => 'required'
        ]);
        
        // ddd($valdata);
        //metodo di prova
        // return (new MarkDownContactFormMail($valdata))->render();
        //metodo corretto
        Mail::to('admin@example.com')->send(new MarkDownContactFormMail($valdata));
        // Mail::to($request->email) per mandare un email all'utente

        return redirect()->back->whit('message','thanks for your send');
    }
}
