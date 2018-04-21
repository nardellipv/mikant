<?php

namespace App\Http\Controllers\Back;

use App\ModelBack\Client;
use App\ModelBack\Invoice;
use App\ModelBack\Payment;
use App\ModelBack\Project;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::orderBy('id', 'DESC')
            ->paginate(10);

        return view('back.invoice.list', compact('invoices'));
    }

    public function view($id)
    {
        $invoice = Invoice::find($id);

        return view('back.invoice.view', compact('invoice'));
    }

    public function create(Request $request)
    {
        $clients = Client::get();

        $projects = Project::get();

        $methods = Payment::get();

        return view('back.invoice.create', compact('clients', 'projects', 'methods'));
    }

    public function store(Request $request)
    {

        $invoice = new Invoice;

        $invoice->fill($request->all())->save();

        $invoicePreview = Invoice::orderBy('id', 'DESC')->first();


        return view('back.invoice.preview', compact('invoicePreview'));
    }

    public function show($id)
    {
        $invoice = Invoice::find($id);

        $clients = Client::get();

        $projects = Project::get();

        $methods = Payment::get();

        return view('back.invoice.edit', compact('invoice', 'clients', 'projects', 'methods'));
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);

        $invoice->status = $request['status'];
        $invoice->fill($request->all())->save();

        Session::flash('message', 'Recibo # <b>' . $invoice->id . '</b> modificado exitosamente.');
        return back();
    }


    public function destroy($id)
    {
        $invoice = Invoice::find($id);

        $invoice->delete();

        Session::flash('message', 'Recibo # <b>' . $invoice->id . '</b> eliminado exitosamente.');
        return back();
    }
}
