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
            <h5 class="panel-title">Métodos de Pagos</h5>

        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Método</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->method }}</td>

                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    {!! Form::open(['method' => 'DELETE','route' => ['payment.destroy', $payment->id],'style'=>'display:inline']) !!}
                                    {{ Form::token() }}
                                    <li><button type="submit" class="btn btn-link"> Eliminar</button></li>
                                    {!! Form::Close() !!}

                                    <li><a href="{{ route('payment.edit', $payment->id) }}" > Editar</a></li>
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