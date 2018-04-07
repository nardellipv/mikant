<?php

namespace App\Http\Controllers\Front;

use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {

        $valueArray = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Test mail...
        Mail::to('comercial@mikant.com')->send(new Contact($valueArray));
        Session::flash('message', 'Su email fue enviado, le responderemos a la brevedad. Muchas gracias.');
        return back();
    }
}
