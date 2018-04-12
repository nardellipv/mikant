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
        dd($request->all());
        Mail::send('front.email.contact', $request->all(), function ($msj){
            $msj->subject('Mensaje de contacto');
            $msj->to('comercial@mikant.com');
        });

        Session::flash('message', 'Muchas gracias por contactarnos, en breve le responderemos.');
        return back();
    }
}
