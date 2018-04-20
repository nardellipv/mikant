@extends('back.layouts.main')

@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">Recibo</h6>
            <div class="heading-elements">
                <button type="button" onclick="myFunction()" class="btn btn-default btn-xs heading-btn"><i
                            class="icon-printer position-left"></i> Print
                </button>
            </div>
        </div>

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
                        <h5 class="text-uppercase text-semibold">Recibo #{{ $invoicePreview->id }}</h5>
                        <ul class="list-condensed list-unstyled">
                            <li>Fecha Inicio: <span class="text-semibold">{{ $invoicePreview->date_start }}</span></li>
                            <li>Fecha Vencimiento: <span class="text-semibold">{{ $invoicePreview->date_end }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-9 content-group">
                    <span class="text-muted">Recibo a:</span>
                    <ul class="list-condensed list-unstyled">
                        <li><h5>{{ $invoicePreview->client->name }} {{ $invoicePreview->client->last_name }}</h5></li>
                        <li><span class="text-semibold">{{ $invoicePreview->client->city }}</span></li>
                        <li>{{ $invoicePreview->client->address }}</li>
                        <li>{{ $invoicePreview->client->phone }}</li>
                        <li>{{ $invoicePreview->client->email }}</li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 content-group">
                    <span class="text-muted">Detalles del Pago:</span>
                    <ul class="list-condensed list-unstyled invoice-payment-details">
                        <li><h5>Total: <span class="text-right text-semibold">${{ $invoicePreview->price }}</span></h5>
                        </li>
                        <li>Balance: <span class="text-semibold">${{ $invoicePreview->balance }}</span></li>
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
                        <span class="text-muted">{{ $invoicePreview->description }}</span>
                    </td>
                    <td>${{ $invoicePreview->price }}</td>
                    <td>{{ $invoicePreview->quantity }}</td>
                    <td><span class="text-semibold">${{ $invoicePreview->price * $invoicePreview->quantity }}</span>
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
                                    <td class="text-right">${{ $invoicePreview->price }}</td>
                                </tr>
                                <tr>
                                    <th>IVA: <span class="text-regular">(21%)</span></th>
                                    <td class="text-right">${{ $invoicePreview->tax }}</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td class="text-right text-primary"><h5 class="text-semibold">
                                            ${{ $invoicePreview->price + $invoicePreview->tax - $invoicePreview->balance  }}</h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-right">
                            <button type="button" class="btn btn-primary btn-labeled"><b><i class="icon-paperplane"></i></b>
                                Send invoice
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            window.print();
        }
    </script>
@endsection
