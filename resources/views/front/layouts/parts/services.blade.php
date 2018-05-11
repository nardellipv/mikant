<div class="content" id="services">
    <div class="services-section">
        <div class="container">
            <h3>Nuestros Servicios</h3>
            <div class="services-section-grids">
                <div class="col-md-4 services-section-grid1">
                    <div class="services-section-grid1-top">
                        <h4>Atención las 24hs</h4>
                        <p>Atención todos los días, todo el día.</p>
                        <div class="icons">
                            <div class="icon-left">
                                <i class="call"></i>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="services-section-grid1-bottom">
                        <h4>Sistemas Responsive</h4>
                        <p>Todos nuestros sistemas son adaptable a las distantas plataformas que existen en el mercado.</p>
                        <div class="icons">
                            <div class="icon-left">
                                <i class="dt"></i>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 services-section-grid2">
                    <h4>Actualización de Webs</h4>
                    <p>Tener una web vieja y pasada de moda da una mala impresión a los futuros clientes, nosotros podemos actualizarla.</p>
                    <p>Tener una web desactualizada es la principal razon para que futuros clientes la abonden y se pierdan posibles ventas.</p>
                    <div class="icons icons2">
                        <div class="icon-left">
                            <i class="interact"></i>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 services-section-grid3">
                    <div class="services-section-grid3-top">
                        <h4>Servicio de hosting</h4>
                        <p>Contamos con alojamiento propio para así poder brindar un servicio completo a nuestros clientes.</p>
                        <div class="icons">
                            <div class="icon-left">
                                <img src="{{ asset('images/server.png') }}" alt="server">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="services-section-grid3-bottom">
                        <h4>Productos Propios</h4>
                        <p>Contamos con aplicaciones propias desarrolladas y comercializadas por nosotros.</p>

                        <div class="icons">
                            <div class="icon-left">
                                <img src="{{ asset('images/application.png') }}" alt="aplicacion">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    {{--suscribe--}}
    @include('front.layouts.parts.suscribe')
    {{--suscribe--}}

    {{--clients--}}
    @include('front.layouts.parts.client')
    {{--clients--}}

    {{--testimonial--}}
    @include('front.layouts.parts.testimonial')
    {{--testimonial--}}


</div>