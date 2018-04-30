@extends('back.layouts.main')

@section('content')

    <div class="row">
        @foreach ($invoices as $invoice)
            <div class="col-md-6">
                <div class="panel invoice-grid">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="text-semibold no-margin-top"><a
                                            href="{{url('view', $invoice->client->id)}}">{{ $invoice->client->name }}</a>
                                </h6>
                                <ul class="list list-unstyled">
                                    <li>Recibo #: &nbsp;{{ $invoice->id }}</li>
                                    <li>Creado: <span class="text-semibold">{{ $invoice->date_start }}</span></li>
                                    <li>Finaliza: <span class="text-semibold">{{ $invoice->date_end }}</span></li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h6 class="text-semibold text-right no-margin-top">
                                    Total: ${{ number_format($invoice->price,0) }}</h6>
                                <h6 class="text-semibold text-right no-margin-top">
                                    Balance: ${{ number_format($invoice->balance,0) }}</h6>
                                <ul class="list list-unstyled text-right">
                                    {{--<li>Method: <span class="text-semibold">SWIFT</span></li>--}}
                                    <li class="dropdown">
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer panel-footer-condensed">
                        <div class="heading-elements">

                            <ul class="list-inline list-inline-condensed heading-text pull-right">
                                <li><a href="#" class="text-default" data-toggle="modal"
                                       data-target="#InvoiceModal-{{$invoice->id}}"><i
                                                class="icon-eye8"></i></a></li>
                                <li><a href="#" class="text-default" data-toggle="modal"
                                       data-target="#ExpirationModal-{{$invoice->id}}">Vencimiento</a></li>
                                <li class="dropdown">
                                    <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{ route('invoice.show', $invoice->id) }}"><i
                                                        class="icon-file-plus"></i> Editar</a></li>
                                        {!! Form::open(['method' => 'DELETE','route' => ['invoice.destroy', $invoice->id],'style'=>'display:inline']) !!}
                                        {{ Form::token() }}
                                        <li>
                                            <button type="submit" class="btn btn-link"><i class="icon-cross2"></i>
                                                Eliminar
                                            </button>
                                        </li>
                                        {!! Form::Close() !!}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('back.invoice.modalInvoice')
            @include('back.invoice.modalExpiration')
        @endforeach
    </div>
    <div class="col-md-offset-5">
        {{ $invoices->render() }}
    </div>
@endsection