<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <h6>{{ Auth::user()->name }}</h6>
                </div>

                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>Cuenta</span> <i class="caret"></i></a>
                </div>
            </div>

            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                    <li><a href="{{ url('profile') }}"><i class="icon-user-plus"></i> <span>Perfil</span></a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="icon-exit"></i> <span>Salir</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Menú</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="{{ url('dashboard') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li>
                        <a href="#"><i class="icon-file-text2"></i> <span>Blog</span></a>
                        <ul>
                            <li><a href="{{ url('blog/show') }}">Listado</a></li>
                            <li><a href="{{ url('blog/create') }}">Nueva entrada</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-database2"></i> <span>Hosting</span></a>
                        <ul>
                            <li><a href="{{ url('backhosting/list') }}">Listado</a></li>
                            <li><a href="{{ url('backhosting/create') }}">Nueva entrada</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-person"></i> <span>Clientes</span></a>
                        <ul>
                            <li><a href="{{ url('clients/list') }}">Listado</a></li>
                            <li><a href="{{ url('clients/create') }}">Agregar cliente</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-folder-open3"></i> <span>Proyectos</span></a>
                        <ul>
                            <li><a href="{{ url('projects/list') }}">Listado</a></li>
                            <li><a href="{{ url('projects/create') }}">Agregar proyecto</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-coins"></i> <span>Recibos</span></a>
                        <ul>
                            <li><a href="{{ url('invoice') }}">Listado</a></li>
                            <li><a href="{{ url('invoice/create') }}">Agregar nueva factura</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-credit-card"></i> <span>Métodos de pago</span></a>
                        <ul>
                            <li><a href="{{ url('payment') }}">Listado</a></li>
                            <li><a href="{{ url('payment/create') }}">Agregar método de pago</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>