<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\Back\ClientResquest;
use App\ModelBack\Client;
use App\ModelBack\Hosting;
use App\ModelBack\Invoice;
use App\ModelBack\Payment;
use App\ModelBack\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Iodev\Whois\Whois;

class HostingController extends Controller
{
    public function index()
    {

        $prices = Hosting::get();

        $busqueda = 'false';

        return view('hosting.layouts.main', compact('busqueda', 'prices'));
    }

    public function hosting()
    {
        return view('hosting.webHosting');
    }

    public function wphosting()
    {
        return view('hosting.wphosting');
    }

    public function searchdomain()
    {
        return view('hosting.search');
    }

    public function help()
    {
        return view('hosting.help');
    }

    public function contact()
    {
        return view('hosting.contact');
    }

    public function term()
    {
        return view('hosting.term');
    }

    public function search(Request $request)
    {
        $prices = Hosting::get();

        $search = $request->search;
        $domain = $request->domains;

        $url = $search . $domain;
        $available = Whois::create()->isDomainAvailable($search . $domain);

        return view('hosting.layouts.register', compact('available', 'url', 'prices'));

    }

    public function buy($id)
    {
        $price = Hosting::find($id);

        $payments = Payment::get();

        return view('hosting.layouts.buy', compact('price', 'payments'));
    }

    public function step2(ClientResquest $request, $id)
    {

        //guardo cliente
        $client = new Client;
        $client->fill($request->all())->save();

        //guardo proyecto
        $project = new Project;
        if ($request->txt1 != NULL) {
            $project->name = $request['txt1'];
        }
        if ($request->txt2 != NULL) {
            $project->name = $request['txt2'] . '.' . $request['tld'];
        }
        $project->date_start = date("Y/m/d");
        $project->date_end = date("Y/m/d");
        $project->status = 'TEMPORAL';
        if ($request->txt1 != NULL) {
            $project->observation = 'Compra de hosting.';
        } else {
            $project->observation = 'Compra de hosting + mas registración de dominio' . $project->name;
        }
        $project->client_id = $client->id;
        $project->save();


        $price = Hosting::find($id);

        //sumo hosting mas dominio
        if ($request->txt2 != NULL) {
            $total = $request['pago'] + $price->cost_domain;
        } else {
            $total = $request['pago'];
        }


        $invoice = new Invoice;
        $invoice->date_start = date("Y/m/d");
        $invoice->date_end = date("Y/m/d");
        $invoice->price = $total;
        $invoice->balance = 0;
        $invoice->quantity = 1;
        $invoice->tax = 0;
        if ($request->txt1 != NULL) {
            $invoice->description = 'Compra de hosting';
        } else {
            $invoice->description = 'Compra de hosting + mas registración de dominio' . $project->name;
        }
        $invoice->client_id = $client->id;
        $invoice->project_id = $project->id;
        $invoice->payment_id = $request['formaPago'];
        $invoice->save();


        //creo el hosting en WHM
        $cpanel = new \Gufy\CpanelPhp\Cpanel([
            'host' => 'https://sd-1206130-l.dattaweb.com:2087/', // ip or domain complete with its protocol and port
            'username' => 'pablon', // username of your server, it usually root.
            'auth_type' => 'password', // set 'hash' or 'password'
            'password' => '5215MicaAnto55!', // long hash or your user's password
        ]);

        //genero usuario para cpanel

        $userName = $client->name . '' . substr($client->last_name, 0, 1);

        $accounts = $cpanel->createAccount($project->name, $userName, 'MOiEnkur7Es=', $request->plan);


        Mail::send('hosting.layouts.mail.account', $request->all(), function ($msj) use ($request) {
            $msj->from('comercial@mikant.com', 'MikAnt');
            $msj->subject('Compra hosting - MikAnt');
            $msj->to($request->email, $request->name);
        });


        Mail::send('hosting.layouts.mail.compra', $request->all(), function ($msj) use ($request) {
            $msj->from('comercial@mikant.com', 'MikAnt');
            $msj->subject('Compra Hosting -  MikAnt');
            $msj->to('comercial@mikant.com');
        });

        return view('hosting.layouts.buy3', compact('client', 'price'));
    }
}
