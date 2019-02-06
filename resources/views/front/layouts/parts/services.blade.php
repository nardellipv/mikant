<div class="content" id="services">
    <div class="services-section">
        <div class="container">
            <h3>Nuestros Servicios</h3>
            <div class="services-section-grids">
                <div class="col-md-4 services-section-grid1">
                    <div class="services-section-grid1-top">
                        <h4>Desarrollo de software empresarial</h4>
                        <p>Cree un software a medida y modernice su empresa siempre a un precio acorde al desarrollo.</p>
                        <div class="icons">
                            <div class="icon-left">
                                <i class="zoom"></i>
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
                    <p>Tener una web desactualizada es la principal razón para que futuros clientes la abandonen y se pierdan posibles ventas.</p>
                    <p>Luego de la actualización usted mismo podrá modificar su web sin necesidad de contactar a especialistas.</p>
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
                        <h4>Software a medida de sus necesidades</h4>
                        <p>Desarrollamos sistemas web bajo un entorno web, lo que facilita el acceso desde cualquier parte con acceso a internet.
                        Podrá acceder a su sistema desde cualquier dispositivo.</p>
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