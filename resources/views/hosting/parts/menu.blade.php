<nav id="navbar">
    <ul id="nav">
        <li class="current-menu-item"><a href="{{ url('index') }}">Home</a></li>
        <li><a href="#">hosting <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li><a href="{{ url('hosting') }}">web hosting</a></li>
                <li><a href="{{ url('wphosting') }}">WordPress hosting</a></li>
            </ul>
        </li>
        <li><a href="{{ url('searchdomain') }}">Dominio</a></li>
        <li><a href="{{ url('help') }}">Help</a></li>
        <li><a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li><a href="blog-sidebar.html">Blog</a></li>
                <li><a href="single.html">single blog</a></li>
            </ul>
        </li>
        <li><a href="{{ url('contact') }}">Contacto</a></li>
    </ul>
</nav>
<!-- Cart Section -->
<div class="cart_area hidden-xs">
    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <div class="cart_total"><p>2</p></div></a>
</div>