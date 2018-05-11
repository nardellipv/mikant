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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.5678370825044!2d-68.83189748515527!3d-32.85669237466961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e08bf470a5ca5%3A0xc29b0559d579426e!2sArgentino+E.+399-449%2C+M5539CFQ+Las+Heras%2C+Mendoza!5e0!3m2!1ses!2sar!4v1525975823721" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="map-layer"></div>
</div>