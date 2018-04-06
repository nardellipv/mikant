<div class="header">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="logo" />
        </div>
        <div class="header-right">
            <h4><i class="phone"></i>(256) 152 3658</h4>
            <span class="menu"></span>
            <div class="top-menu">
                <ul>
                    <li><a class="active" href="">Home</a></li>
                    <li><a href="#about">Sobre Nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </div>
            <!-- script for menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-menu" ).slideToggle( "slow", function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script for menu -->

        </div>
        <div class="clearfix"></div>
    </div>
</div>