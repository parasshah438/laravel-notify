<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function index()
    {
        notify()->success('Laravel Notify is awesome!');

        //other notification types

        //1 Toast notification, (The default notification for Laravel Notify)
        //notify()->success('Welcome to Laravel Notify ⚡️') or notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title');


        //2 connectify notification, example of basic usage
        //connectify('success', 'Connection Found', 'Success Message Here');


        //3 drakify (😎) notification, displays an alert only
        //drakify('success')
        //drakify('error')


        //4 smilify notification, displays a simple custom toast notification using the smiley (😊) emoticon
        //smilify('success', 'You are successfully reconnected')

        
        //5 emotify notification, displays a simple custom toast notification using a vector emoticon
        //emotify('success', 'You are awesome, your data was successfully created')


        //As an example, we could override the 'title' of our 'common-notification' by using the following   
        //notify()->preset('common-notification', ['title' => 'This is the overridden title']);

        return redirect()->route('login');
    }

    public function store(Request $request){
       

        notify()->success('Form submitted successfully!');

        return redirect()->back();
    }
}
