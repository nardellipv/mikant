<div class="our-clients" id="clients">
    <div class="container">
        <div class="our-clients-head text-center">
            <h3>Algunos de nuestros clientes.</h3>
        </div>
        <!---strat-image-cursuals---->
        <div class="scroll-slider">
            <div class="nbs-flexisel-container">
                <div class="nbs-flexisel-inner">
                    <ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
                        <li><img src="{{ asset('images/clientes/bicificados.png') }}" alt="bicificados"></li>
                        <li>
                            <a href="http://blowpack.com.ar" target="_blank">
                                <img src="{{ asset('images/clientes/blowpack.png') }}" alt="blowpack">
                            </a>
                        </li>
                        <li>
                            <img src="{{ asset('images/clientes/empatica.jpg') }}" alt="empatica">
                        </li>
                        <li>
                            <img src="{{ asset('images/clientes/latinoventas.jpg') }}" alt="latinoventas">
                        </li>
                        <li>
                            <a href="http://www.gkinder.com" target="_blank">
                                <img src="{{ asset('images/clientes/gkinder.png') }}" alt="gkinder">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.puquios.com" target="_blank">
                                <img src="{{ asset('images/clientes/puquios.png') }}" alt="puquio">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.uncuyo.edu.ar/recreo/" target="_blank">
                                <img src="{{ asset('images/clientes/recreo.jpg') }}" alt="recreo">
                            </a>
                        </li>
                        <li>
                            <img src="{{ asset('images/clientes/serviciosline.png') }}" alt="serviciosline">
                        </li>
                    </ul>
                    <div class="nbs-flexisel-nav-left" style="display:none"></div>
                    <div class="nbs-flexisel-nav-right" style="display:none"></div>
                </div>
            </div>
            <div class="clear"></div>
            <!---strat-image-cursuals---->
            <script type="text/javascript" src="js/jquery.flexisel.js"></script>
            <!---End-image-cursuals---->
            <script type="text/javascript">
                $(window).load(function () {
                    $(".flexiselDemo3").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <!---->
            <!---->
        </div>
    </div>

    <!---//End-signin---->
</div>