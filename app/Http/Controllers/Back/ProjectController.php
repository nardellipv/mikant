<?php

namespace App\Http\Controllers\Back;

use App\ModelBack\Client;
use App\ModelBack\Project;
use foo\bar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function show()
    {
        $projects = Project::get();

        return view('back.project.list', compact('projects'));
    }

    public function edit($id)
    {
        $project = Project::find($id);

        $clients = Client::get();

        return view('back.project.edit', compact('project', 'clients'));
    }

    public function update(Request $request, $id)
    {

        $project = Project::find($id);

        $project->status = $request['status'];
        $project->fill($request->all())->save();

        Session::flash('message', 'Proyecto <b>' . $project->name . '</b> modificado correctamente');
        return back();
    }

    public function create()
    {
        $clients = Client::orderBy('name', 'ASC')
            ->get();

        return view('back.project.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $project = new Project;

        $project->fill($request->all())->save();

        Session::flash('message', 'Proyecto <b>' . $project->name . '</b> creado correctamente');
        return back();
    }
}
