@extends('back.layouts.main')
@section('style')
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <!-- Basic layout-->
            {!! Form::open(['method' => 'POST','route' => ['invoice.store'],'class'=>'form-horizontal']) !!}
            {{ csrf_field() }}
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Crear Recibo</h5>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Fecha
                            <small>(inicio-fin)</small>
                            :</label>
                        <div class="col-lg-9">
                            <div class="input-group input-daterange">
                                <input id="startDate1" name="date_start" type="text"
                                       class="form-control" readonly="readonly">
                                <span class="input-group-addon"></span>
                                <span class="input-group-addon">a</span>
                                <input id="endDate1" name="date_end" type="text" class="form-control"
                                       readonly="readonly">
                                <span class="input-group-addon"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Cliente:</label>
                            <div class="col-lg-9">
                                <select name="client_id" class="form-control">
                                    <option></option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Método de pago:</label>
                            <div class="col-lg-9">
                                <select name="payment_id" class="form-control">
                                    <option></option>
                                    @foreach($methods as $method)
                                        <option value="{{ $method->id }}">{{ $method->method }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Proyecto:</label>
                            <div class="col-lg-9">
                                <select name="project_id" class="form-control">
                                    <option></option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Precio:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Balance:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="balance">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Cantidad:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="quantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Impuesto:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="tax">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Descripción:</label>
                            <div class="col-lg-9">
                                <textarea rows="3" cols="5" name="description" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Crear Recibo <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            {!! Form::Close() !!}
            <!-- /basic layout -->

            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.input-daterange').datepicker({
                    format: 'yyyy-mm-dd'
                });
            });
        </script>
@endsection