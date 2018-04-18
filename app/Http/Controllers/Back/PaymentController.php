<?php

namespace App\Http\Controllers\Back;

use App\ModelBack\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
   public function index()
   {
       $payments = Payment::get();

       return view('back.payment.list', compact('payments'));
   }

   public function create()
   {
       return view('back.payment.create');
   }

   public function store(Request $request)
   {
       $payment = new Payment;

       $payment->fill($request->all())->save();

       Session::flash('message', 'Método de pago <b>' . $payment->method . '</b> creado correctamente');
       return back();
   }

   public function edit($id)
   {
       $payment = Payment::find($id);

       return view('back.payment.edit', compact('payment'));
   }

   public function update(Request $request, $id)
   {
       $payment = Payment::find($id);

       $payment->fill($request->all())->save();

       Session::flash('message', 'Método de pago <b>' . $payment->method . '</b> modificado correctamente');
       return back();
   }

   public function destroy($id)
   {
       $payment = Payment::find($id);

       $payment->delete();

       Session::flash('message', 'Método de pago <b>' . $payment->method . '</b> eliminado correctamente');
       return back();
   }
}
