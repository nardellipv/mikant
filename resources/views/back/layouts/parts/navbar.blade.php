<div class="navbar navbar-inverse bg-blue-800">
    <div class="navbar-header">
        <img src="{{ asset('styleBack/assets/images/logo.png') }}" width="20%" style="background-color: azure;">

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

        </ul>

        <div class="navbar-right">
            <p class="navbar-text">Hola, {{ Auth::user()->name }}</p>

        </div>
    </div>
</div>