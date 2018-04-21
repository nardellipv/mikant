<div class="contact-section text-center" id="contact">
    <div class="container">
        <h3>Contacto</h3>
        <div class="contact-top">
            <div class="col-md-4 contact-section-grid text-center">
                <i class="smartphone"></i>
                <p>Tel : (54) 261-5965966</p>
            </div>
            <div class="col-md-4 contact-section-grid text-center">
                <i class="user"></i>
                <p>Ejercito Argentino 456,<p>
                <p>Mendoza,</p>
                <p>Argentina</p>
            </div>
            <div class="col-md-4 contact-section-grid text-center">
                <i class="global"></i>
                <p>comercial@mikant.com</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="contact-section-bottom">
            <div class="contact-form">
                {!! Form::open(['method' => 'POST','route' => ['sendemail'],'style'=>'display:inline']) !!}
                {{ csrf_field() }}
                    <div class="col-md-6 contact-left">
                        <input type="text" name="name" class="text" placeholder="Nombre">
                        <input type="text" name="email" class="text" placeholder="E-mail">
                    </div>
                    <div class="col-md-6 contact-right">
                        <textarea name="mensaje" placeholder="Mensaje"></textarea>
                    </div>
                    <input type="submit" value="enviar " />
                {!! Form::Close() !!}
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwbXFhLgIfpYRQxxasB661O8&key=AIzaSyAARWvVAnJPXEZTm_rmtSxQhX9GsVO-6PM" allowfullscreen></iframe>
    <div class="map-layer"></div>
</div>