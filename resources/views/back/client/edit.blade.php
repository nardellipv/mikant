@extends('back.layouts.main')
@section('style')
    <script type="text/javascript"
            src="{{ asset('styleBack/assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/pages/form_layouts.js') }}"></script>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <!-- Basic layout-->
            {!! Form::model($client, ['method' => 'PATCH','route' => ['clients.update', $client->id],'class'=>'form-horizontal']) !!}
            {{ csrf_field() }}
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Crear nuevo cliente</h5>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" value="{{ $client->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Apellido:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="last_name" value="{{ $client->last_name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Ciudad:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="city" value="{{ $client->city }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Dirección:</label>
                        <div class="col-lg-9">
                            <textarea rows="3" cols="5" name="address" class="form-control">{{ $client->address }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Teléfono:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="phone" value="{{ $client->phone }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email" value=" {{ $client->email }}">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Actualizar Cliente <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        {!! Form::Close() !!}
        <!-- /basic layout -->

        </div>
    </div>

@endsection