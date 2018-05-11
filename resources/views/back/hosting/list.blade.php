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
                <th>Space Disk</th>
                <th>Trans</th>
                <th>Email Account</th>
                <th>Data Bases</th>
                <th>FTP</th>
                <th>Year Pay</th>
                <th>Cost Before</th>
                <th>Cost Month</th>
                <th>Cost domain</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($hostings as $hosting)
                <tr>
                    <td>{{ $hosting->name }}</td>
                    <td>{{ $hosting->space_disk }}</td>
                    <td>{{ $hosting->transferencia }}</td>
                    <td>{{ $hosting->email_account }}</td>
                    <td>{{ $hosting->data_base }}</td>
                    <td>{{ $hosting->ftp }}</td>
                    <td>$ {{ $hosting->year_pay }}</td>
                    <td><del>$ {{ $hosting->cost_before }}</del></td>
                    <td>$ {{ $hosting->cost_month }}</td>
                    <td>$ {{ $hosting->cost_domain }}</td>

                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    {!! Form::open(['method' => 'DELETE','route' => ['backhosting.destroy', $hosting->id],'style'=>'display:inline']) !!}
                                    {{ Form::token() }}
                                    <li><button type="submit" class="btn btn-link"> Eliminar</button></li>
                                    {!! Form::Close() !!}

                                    <li><a href="{{ route('backhosting.edit', $hosting->id) }}" > Editar</a></li>
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