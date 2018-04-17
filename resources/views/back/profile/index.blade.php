@extends('back.layouts.main')

@section('content')
    <div class="content">

        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-12">

                <!-- Basic layout-->
                {!! Form::model($user, ['method' => 'PATCH','route' => ['profile.update', $user->id]]) !!}
                {{ csrf_field() }}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Perfil de {{ Auth::user()->name }}</h5>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label>EMail:</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                            </div>

                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Cambiar password">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Actualizar Perfil <i
                                            class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                {!! Form::Close() !!}
                <!-- /basic layout -->

            </div>
        </div>
    </div>
@endsection