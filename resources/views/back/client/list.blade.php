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
                <th>Apellido</th>
                <th>Email</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->phone }}</td>

                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $client->id],'style'=>'display:inline']) !!}
                                    {{ Form::token() }}
                                    <li><button type="submit" class="btn btn-link"> Eliminar</button></li>
                                    {!! Form::Close() !!}

                                    <li><a href="{{ route('clients.edit', $client->id) }}" > Editar</a></li>
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