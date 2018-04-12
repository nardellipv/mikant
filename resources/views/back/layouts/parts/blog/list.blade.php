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
                <th>Título</th>
                <th>Cuerpo</th>
                <th>Creado</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{!! substr($blog->body,0,100) !!}</td>
                    <td hidden></td>
                    <td>{{ $blog->created_at }}</td>
                    @if($blog->status == 'ACTIVE')
                        <td><span class="label label-success">Activo</span></td>
                    @else
                        <td><span class="label label-danger">Desactivo</span></td>
                    @endif
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    {!! Form::open(['method' => 'DELETE','route' => ['blog.destroy', $blog->id],'style'=>'display:inline']) !!}
                                    {{ Form::token() }}
                                    <li><button type="submit" class="btn btn-link"> Eliminar</button></li>
                                    {!! Form::Close() !!}

                                    <li><a href="{{ route('blog.edit', $blog->id) }}" > Editar</a></li>

                                    @if($blog->status == 'DESACTIVE')
                                        <li><a href="{{ url('blog/active', $blog->id) }}" > Activar</a></li>
                                    @else
                                        <li><a href="{{ url('blog/desactive', $blog->id) }}"> Desactivar</a></li>
                                    @endif
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