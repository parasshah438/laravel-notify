<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|',
            'mobile' => 'required|numeric|digits:10|regex:/[6-9][0-9]{9}/',
            'subject' => 'required|string|max:255',
            'contactmessage' => 'required',
        ]);

        Contact::create($request->all());

        notify()->success('Thanks for contacting us!');
        return back();
    }
}
