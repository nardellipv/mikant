<?php

namespace App\Http\Controllers\Back;

use App\ModelBack\Hosting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HostingController extends Controller
{
    public function show()
    {
        $hostings = Hosting::get();

        return view('back.hosting.list', compact('hostings'));
    }

    public function edit($id)
    {
        $hosting = Hosting::find($id);

        return view('back.hosting.edit', compact('hosting'));
    }

    public function update(Request $request, $id)
    {
        $hosting = Hosting::find($id);
        $hosting->fill($request->all())->save();

        Session::flash('message', 'Hosting <b>' . $hosting->name . '</b> modificado exitosamente.');
        return back();
    }

    public function create()
    {
        return view('back.hosting.create');
    }

    public function store(Request $request)
    {
        $hosting = new Hosting;
        $hosting->fill($request->all())->save();

        Session::flash('message', 'Hosting <b>' . $hosting->name . '</b> creado exitosamente.');
        return back();
    }

    public function destroy($id)
    {
        $hosting = Hosting::find($id);

        $hosting->delete();

        Session::flash('message', 'Hosting <b>' . $hosting->name . '</b> eliminado exitosamente.');
        return back();
    }
}
