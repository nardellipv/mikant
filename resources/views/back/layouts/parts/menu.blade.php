<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <h6>Victoria Baker</h6>
                    <span class="text-size-small">Santa Ana, CA</span>
                </div>

                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>Cuenta</span> <i class="caret"></i></a>
                </div>
            </div>

            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                    <li><a href="#"><i class="icon-user-plus"></i> <span>Perfil</span></a></li>
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
                </ul>
            </div>
        </div>
    </div>
</div>