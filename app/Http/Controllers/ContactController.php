<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function create(){

        return view('contacts.create');

    }

    public function store(ContactFormRequest $request){
        

        // dd($request->only('name', 'email', 'message'));
        $messages = Messages::create($request->only('name', 'email', 'message'));

        Mail::to(config('laracarte.admin_support_email'))->send(new ContactMessageCreated($messages));

        flashy()->success('Nous vous répondrons dans le plus brefs delais.');
        
        return Redirect::route('home_path');
    }
}
