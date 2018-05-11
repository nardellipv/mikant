<div class="price" id="precios">
    <div class="container">
        <h4 class="tz-title-4 tzcolor-blue">
            <p class="tzweight_Bold"><span class="m_1">Nuetros<br></span>precios</p>
        </h4>
        @foreach($prices as $price)
        <div class="col-md-4">
            <div class="pricing-table-grid plan_box">
                <h4 style="text-align: center;"><span class="dollar">$</span><del>{{ $price->cost_before }} antes</del><br><span class="month">mensual</span></h4>
                <h3><span class="dollar">$</span>{{ $price->cost_month }}<br><span class="month">mensual</span></h3>
                <ul>
                    <li><span>{{ $price->name }}</span></li>
                    <li><a href="#">{{ $price->space_disk }}GB Espacio en disco</a></li>
                    <li><a href="#">{{ $price->transferencia }} GB Transferencia mensual</a></li>
                    <li><a href="#">{{ $price->email_account }} Cuentas de mail</a></li>
                    <li><a href="#">{{ $price->data_base }} Base de datos</a></li>
                    <li><a href="#">Acceso a web mail</a></li>
                    <li><a href="#">Subdominios Ilimitados</a></li>
                    <li><a href="#">{{ $price->ftp }} Cuentas de FTP</a></li>
                    <li><a href="#"><b>${{ $price->year_pay }} Pago Anual</b></a></li>
                    <li><a href="#">Soporte Full y Personalizado</a></li>
                </ul>
                <a href="{{ url('buy', $price->id) }}" class="order-btn">Contratar</a>
            </div>
        </div>
        @endforeach
        <div class="clearfix"> </div>
    </div>
</div>