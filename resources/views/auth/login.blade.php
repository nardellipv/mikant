@extends('layouts.app')

@section('content')
    <!--header-->
    <div class="header-w3l">
        <h1>
            MikAnt Admin
        </h1>
    </div>
    <!--//header-->
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <h2>Ingresar</h2>
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <label>Mail</label>
                <div class="pom-agile">
                    <span class="fa fa-user-o" aria-hidden="true"></span>
                    <input id="email" name="email" class="user{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           type="text" required="">
                    @if($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <label>Password</label>
                <div class="pom-agile">
                    <span class="fa fa-key" aria-hidden="true"></span>
                    <input id="password" name="password" class="pass{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           type="password" required="">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="sub-w3l">
                    <div class="sub-agile">
                        <input type="checkbox" id="brand1" value="">
                        <label for="brand1">
                            <span></span>Mantener sesión</label>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="right-w3l">
                    <input type="submit" value="Ingresar">
                </div>
            </form>
        </div>
    </div>
    <!--//main-->
    <!--footer-->
    <div class="footer">
        <p>&copy; 2018 MikAnt. All rights reserved | Design by
            <a href="https://www.mikant.com">MikAnt</a>
        </p>
    </div>
    <!--//footer-->
@endsection
