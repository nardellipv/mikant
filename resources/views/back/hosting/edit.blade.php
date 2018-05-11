@extends('back.layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <!-- Basic layout-->
            {!! Form::model($hosting, ['method' => 'PATCH','route' => ['backhosting.update', $hosting->id],'class'=>'form-horizontal']) !!}
            {{ csrf_field() }}
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Crear nuevo cliente</h5>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" value="{{ $hosting->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Space Disk:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="space_disk"
                                   value="{{ $hosting->space_disk }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Transferencia:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="transferencia"
                                   value="{{ $hosting->transferencia }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email Account:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="email_account"
                                   value="{{ $hosting->email_account }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Data Base:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="data_base" value="{{ $hosting->data_base }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">FTP:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="ftp" value="{{ $hosting->ftp }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Year Pay:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="year_pay" value="{{ $hosting->year_pay }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Cost Before:</label>
                        <div class="col-lg-9">
                            <del><input type="text" class="form-control" name="cost_before"
                                        value="{{ $hosting->cost_before }}"></del>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Cost Month:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="cost_month"
                                   value="{{ $hosting->cost_month }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Cost Domain:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="cost_domain"
                                   value="{{ $hosting->cost_domain }}">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Actualizar hosting <i
                                    class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
            {!! Form::Close() !!}
        </div>
    </div>

@endsection