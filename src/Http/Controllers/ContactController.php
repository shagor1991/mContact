<?php

namespace Shagor\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Shagor\Contact\Mail\Contactmail;
use Shagor\Contact\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request){
        Contact::create($request->all());
        Mail::to(config('contact.email_to'))->send(new Contactmail($request));
        return redirect('/contact');
    }


}
