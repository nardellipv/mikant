<?php

namespace App\Http\Controllers\Back;

use App\ModelBack\Client;
use App\Http\Controllers\Controller;
use App\ModelBack\Invoice;
use App\ModelBack\Project;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Back\ClientResquest;

class ClientController extends Controller
{

    public function view($id)
    {
        $client = Client::find($id);

        $projects = Project::orderBy('date_start', 'DESC')
            ->where('client_id', $id)
            ->get();

        $invoices = Invoice::orderBy('date_start', 'DESC')
            ->where('client_id', $id)
            ->get();

        return view('back.client.show', compact('client', 'projects','invoices'));
    }

    public function show()
    {
        $clients = Client::get();

        return view('back.client.list', compact('clients'));
    }

    public function create()
    {
        return view('back.client.create');
    }

    public function store(ClientResquest $request)
    {

        $client = new Client;
        $client->fill($request->all())->save();

        Session::flash('message', 'Cliente <b>' . $request->name . '</b> creado exitosamente.');
        return back();
    }

    public function edit($id)
    {
        $client = Client::find($id);

        return view('back.client.edit', compact('client'));
    }

    public function update(ClientResquest $request, $id)
    {
        $client = Client::find($id);
        $client->fill($request->all())->save();

        Session::flash('message', 'Cliente <b>' . $request->name . '</b> modificado exitosamente.');
        return back();
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        Session::flash('message', 'Cliente <b>' . $client->name . ' ' . $client->last_name . '</b> eliminado exitosamente.');
        return back();
    }
}
