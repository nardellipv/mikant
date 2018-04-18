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
            {!! Form::model($payment, ['method' => 'PATCH','route' => ['payment.update', $payment->id],'class'=>'form-horizontal']) !!}
            {{ csrf_field() }}
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Crear nuevo método de pago</h5>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="method" value="{{ $payment->method }}">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Modificar método de pago <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        {!! Form::Close() !!}
        <!-- /basic layout -->

        </div>
    </div>

@endsection