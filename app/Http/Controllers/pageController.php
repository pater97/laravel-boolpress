<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function contacts(){
        return view('guest.contacts.form');
    }
    public function SendContactForm(Request $request){
        $valata = $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'body' => 'required'
        ]);

        Mail::to('abcd@example.com')->send(new ContactForEmail($valdata));

        return redirect()->back->whit('message','thanks for your send');
    }
}
