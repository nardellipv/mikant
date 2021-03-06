<!-- Modal with invoice -->
<div id="InvoiceModal-{{$invoice->id}}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            {!! Form::open(['method' => 'POST','route' => ['invoicesend'],'style'=>'display:inline']) !!}
            {{ csrf_field() }}
            <div class="panel panel-white">

                <div class="panel-body no-padding-bottom">
                    <div class="row">
                        <div class="col-sm-6 content-group">
                            <img src="{{ asset('images/imglogoSinfondoPequenia.png') }}" class="content-group mt-10"
                                 alt=""
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
                                <input name="invoice" value="{{ $invoice->id }}" hidden>
                                <ul class="list-condensed list-unstyled">
                                    <li>Fecha Inicio: <span class="text-semibold">{{ $invoice->date_start }}</span></li>
                                    <input name="date_start" value="{{ $invoice->date_start }}" hidden>
                                    <li>Fecha Vencimiento: <span class="text-semibold">{{ $invoice->date_end }}</span>
                                        <input name="date_end" value="{{ $invoice->date_end }}" hidden>
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
                                <input name="name" value="{{ $invoice->client->name }}" hidden>
                                <input name="last_name" value="{{ $invoice->client->last_name }}" hidden>
                                <li><span class="text-semibold">{{ $invoice->client->city }}</span></li>
                                <input name="city" value="{{ $invoice->client->city }}" hidden>
                                <li>{{ $invoice->client->address }}</li>
                                <input name="address" value="{{ $invoice->client->address }}" hidden>
                                <li>{{ $invoice->client->phone }}</li>
                                <input name="phone" value="{{ $invoice->client->phone  }}" hidden>
                                <li>{{ $invoice->client->email }}</li>
                                <input name="email" value="{{ $invoice->client->email }}" hidden>
                            </ul>
                        </div>

                        <div class="col-md-6 col-lg-3 content-group">
                            <span class="text-muted">Detalles del Pago:</span>
                            <ul class="list-condensed list-unstyled invoice-payment-details">
                                <li><h5>Total: <span class="text-right text-semibold">${{ $invoice->price }}</span></h5>
                                    <input name="price" value="{{ $invoice->price }}" hidden>
                                </li>
                                <li>Balance: <span class="text-semibold">${{ $invoice->balance }}</span></li>
                                <input name="balance" value="{{ $invoice->balance }}" hidden>
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
                                <input name="description" value="{{ $invoice->description }}" hidden>
                            </td>
                            <td>${{ $invoice->price }}</td>
                            <td>{{ $invoice->quantity }}</td>
                            <input name="quantity" value="{{ $invoice->quantity }}" hidden>
                            <td><span class="text-semibold">${{ $invoice->price * $invoice->quantity }}</span>
                                <input name="total" value="{{ $invoice->price * $invoice->quantity }}" hidden>
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
                                    <img src="{{ asset('images/signature.png') }}" class="display-block"
                                         style="width: 150px;"
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
                                    <button type="submit"
                                       class="btn btn-primary btn-labeled"><b><i class="icon-paperplane"></i></b>
                                        Send invoice
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::Close() !!}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>