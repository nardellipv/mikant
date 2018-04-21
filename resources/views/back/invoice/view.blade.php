@extends('back.layouts.main')

@section('content')

    <div class="panel panel-white">

        <div class="panel-body no-padding-bottom">
            <div class="row">
                <div class="col-sm-6 content-group">
                    <img src="{{ asset('images/imglogoSinfondoPequenia.png') }}" class="content-group mt-10" alt=""
                         style="width: 120px;">
                    <ul class="list-condensed list-unstyled">
                        <li>Ejercito Argentino, Las Heras</li>
                        <li>Mendoza, Argentina</li>
                        <li>2615965966</li>
                    </ul>
                </div>

                <div class="col-sm-6 content-group">
                    <div class="invoice-details">
                        <h5 class="text-uppercase text-semibold">Recibo #{{ $invoice->id }}</h5>
                        <ul class="list-condensed list-unstyled">
                            <li>Fecha Inicio: <span class="text-semibold">{{ $invoice->date_start }}</span></li>
                            <li>Fecha Vencimiento: <span class="text-semibold">{{ $invoice->date_end }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-9 content-group">
                    <span class="text-muted">Recibo a:</span>
                    <ul class="list-condensed list-unstyled">
                        <li><h5>{{ $invoice->client->name }} {{ $invoice->client->last_name }}</h5></li>
                        <li><span class="text-semibold">{{ $invoice->client->city }}</span></li>
                        <li>{{ $invoice->client->address }}</li>
                        <li>{{ $invoice->client->phone }}</li>
                        <li>{{ $invoice->client->email }}</li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 content-group">
                    <span class="text-muted">Detalles del Pago:</span>
                    <ul class="list-condensed list-unstyled invoice-payment-details">
                        <li><h5>Total: <span class="text-right text-semibold">${{ $invoice->price }}</span></h5>
                        </li>
                        <li>Balance: <span class="text-semibold">${{ $invoice->balance }}</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-lg">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th class="col-sm-1">Precio</th>
                    <th class="col-sm-1">Cantidad</th>
                    <th class="col-sm-1">Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <span class="text-muted">{{ $invoice->description }}</span>
                    </td>
                    <td>${{ $invoice->price }}</td>
                    <td>{{ $invoice->quantity }}</td>
                    <td><span class="text-semibold">${{ $invoice->price * $invoice->quantity }}</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="panel-body">
            <div class="row invoice-payment">
                <div class="col-sm-7">
                    <div class="content-group">
                        <h6>Persona Autorizada</h6>
                        <div class="mb-15 mt-15">
                            <img src="{{ asset('images/signature.png') }}" class="display-block" style="width: 150px;"
                                 alt="">
                        </div>

                        <ul class="list-condensed list-unstyled text-muted">
                            <li><b>Pablo Nardelli</b></li>
                            <li>Ejercito Argentino</li>
                            <li>Las Heras, Mendoza</li>
                            <li>2615965966</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="content-group">
                        <h6>Total</h6>
                        <div class="table-responsive no-border">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Subtotal:</th>
                                    <td class="text-right">${{ $invoice->price }}</td>
                                </tr>
                                <tr>
                                    <th>IVA: <span class="text-regular">(21%)</span></th>
                                    <td class="text-right">${{ $invoice->tax }}</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td class="text-right text-primary"><h5 class="text-semibold">
                                            ${{ $invoice->price + $invoice->tax - $invoice->balance  }}</h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-labeled"><b><i class="icon-paperplane"></i></b>
                                Send invoice
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection