@extends('back.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Cliente <b>{{ $client->name }}</b></h6>
                </div>

                <div class="panel-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs bg-teal-400">
                            <li class="active"><a href="#colored-tab1" data-toggle="tab">Datos Personales</a></li>
                            <li><a href="#colored-tab2" data-toggle="tab">Proyectos</a></li>
                            <li><a href="#colored-tab3" data-toggle="tab">Facturacion</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="colored-tab1">
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- Collapsible list -->
                                        <div class="panel panel-flat">
                                            <div class="panel-heading">
                                            </div>
                                            <ul class="media-list media-list-linked">
                                                <li class="media">
                                                    <div class="media-link cursor-pointer" data-toggle="collapse"
                                                         data-target="#james">

                                                        <div class="media-body">
                                                            <div class="media-heading text-semibold">
                                                                <b>{{ $client->name }} {{ $client->last_name }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="media-right media-middle text-nowrap">
                                                            <i class="icon-menu7 display-block"></i>
                                                        </div>
                                                    </div>

                                                    <div class="collapse" id="james">
                                                        <div class="contact-details">
                                                            <ul class="list-extended list-unstyled list-icons">
                                                                <li><i class="icon-city position-left"></i>
                                                                    {{ $client->city }}
                                                                </li>
                                                                <li><i class="icon-pin position-left"></i>
                                                                    {{ $client->address }}
                                                                </li>
                                                                <li><i class="icon-phone position-left"></i>
                                                                    {{ $client->phone }}
                                                                </li>
                                                                <li><i class="icon-mail5 position-left"></i>
                                                                    {{ $client->email }}
                                                                </li>
                                                                <li><i class="icon-add position-left"></i>
                                                                    {{ $client->created_at }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane" id="colored-tab2">
                                @foreach($projects as $key=> $project)
                                    <div class="col-md-12">

                                        <div class="panel panel-flat">
                                            <div class="panel-heading">
                                            </div>
                                            <ul class="media-list media-list-linked">
                                                <li class="media">
                                                    <div class="media-link cursor-pointer" data-toggle="collapse"
                                                         data-target="#project{{$key}}">

                                                        <div class="media-body">
                                                            <div class="media-heading text-semibold">
                                                                <b>{{ $project->name }}</b><br>
                                                                <span class="text-muted">{{ $project->status }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="media-right media-middle text-nowrap">
                                                            <i class="icon-menu7 display-block"></i>
                                                        </div>
                                                    </div>

                                                    <div class="collapse" id="project{{$key}}">
                                                        <div class="contact-details">
                                                            <ul class="list-extended list-unstyled list-icons">
                                                                <li><i class="icon-add position-left"></i>
                                                                    {{ $project->date_start }}
                                                                </li>
                                                                <li><i class="icon-exclamation position-left"></i>
                                                                    {{ $project->date_end }}
                                                                </li>
                                                                <li><i class="icon-quotes-left position-left"></i>
                                                                    {{ $project->observation }}
                                                                </li>
                                                                <li><i class="icon-traffic-lights position-left"></i>
                                                                    {{ $project->status }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="tab-pane" id="colored-tab3">
                                <table class="table datatable-basic">
                                    <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Recibo</th>
                                        <th>Creado</th>
                                        <th>Cliente</th>
                                        <th>Monto</th>
                                        <th>Balance</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($invoices as $invoice)
                                        <tr>
                                            <td>
                                                @if($invoice->status == 'DRAFT')
                                                    <span class="label label-danger"><i
                                                                class="icon-eraser"></i> Borrador</span>
                                                @endif
                                                @if($invoice->status == 'CANCEL')
                                                    <span class="label label-danger"><i
                                                                class="icon-cross2"></i> Cancelado</span>
                                                @endif
                                                @if($invoice->status == 'PAY')
                                                    <span class="label label-success"><i class="icon-checkmark3"></i> Pagado</span>
                                                @endif
                                                @if($invoice->status == 'SENT')
                                                    <span class="label label-info"><i class="icon-spinner2 spinner"></i> Enviado</span>
                                                @endif
                                            </td>
                                            <td>{{ $invoice->id }}</td>
                                            <td>{{ $invoice->date_start }}</td>
                                            <td>{{ $invoice->client->name }}</td>
                                            <td>${{ number_format($invoice->price,0) }}</td>
                                            <td>${{ number_format($invoice->balance,0) }}</td>
                                            <td class="text-center">
                                                <ul class="icons-list">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-menu9"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            {!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $invoice->id],'style'=>'display:inline']) !!}
                                                            {{ Form::token() }}
                                                            <li>
                                                                <button type="submit" class="btn btn-link"> Eliminar
                                                                </button>
                                                            </li>
                                                            {!! Form::Close() !!}

                                                            <li><a href="{{ route('clients.edit', $invoice->id) }}">
                                                                    Editar</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection