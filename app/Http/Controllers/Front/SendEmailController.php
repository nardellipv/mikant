<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Front\ClientSendMailRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendEmailController extends Controller
{
    public function send(ClientSendMailRequest $request)
    {
//        dd($request->all());
        Mail::send('front.email.contact',$request->all(), function ($msj) use ($request) {
            $msj->from($request->emailClient, $request->nameClient);
            $msj->subject('Mensaje de contacto');
            $msj->to('comercial@mikant.com');
        });

        Session::flash('message', 'Muchas gracias por contactarnos, en breve le responderemos.');
        return back();
    }

    public function invoiceSend(Request $request)
    {

        Mail::send('back.mail.invoice', $request->all(), function ($msj) use ($request) {
            $msj->from('comercial@mikant.com', 'MikAnt');
            $msj->subject('Recibo MikAnt');
            $msj->to($request->email, $request->name);
        });

        Session::flash('message', 'Email de Recibo enviado correctamente.');
        return back();
    }

    public function expirationSend(Request $request)
    {
        Mail::send('back.mail.expiration', $request->all(), function ($msj) use ($request) {
            $msj->from('comercial@mikant.com', 'MikAnt');
            $msj->subject('Aviso vencimiento MikAnt');
            $msj->to($request->email, $request->name);
        });

        Session::flash('message', 'Email de vencimiento enviado correctamente.');
        return back();
    }

}
