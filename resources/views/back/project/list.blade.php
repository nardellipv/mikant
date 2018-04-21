@extends('back.layouts.main')
@section('style')
    <script type="text/javascript"
            src="{{ asset('styleBack/assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('styleBack/assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/pages/datatables_basic.js') }}"></script>
@endsection

@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Listado de entradas</h5>

        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Cliente</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td><a href="{{url('view', $project->client->id)}}">{{ $project->client->name }}</a></td>
                    <td>{{ $project->date_start }}</td>
                    <td>{{ $project->date_end }}</td>
                    @if($project->status == 'BEGINNING')
                        <td><span class="label bg-blue">{{ $project->status }}</span></td>
                    @endif
                    @if($project->status == 'TERMINATED')
                        <td><span class="label bg-danger">{{ $project->status }}</span></td>
                    @endif
                    @if($project->status == 'IN PROGRESS')
                        <td><span class="label bg-success">{{ $project->status }}</span></td>
                    @endif

                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $project->id],'style'=>'display:inline']) !!}
                                    {{ Form::token() }}
                                    <li>
                                        <button type="submit" class="btn btn-link"> Eliminar</button>
                                    </li>
                                    {!! Form::Close() !!}

                                    <li><a href="{{ route('projects.edit', $project->id) }}"> Editar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection