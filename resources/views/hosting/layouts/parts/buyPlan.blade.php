<script type="text/javascript">
    function mostrar(frm, num) {
        if (num == 0) {
            frm.txt1.style.visibility = 'visible';
            frm.txt2.style.visibility = 'hidden';
            frm.tld.style.visibility = 'hidden';
        }
        else {
            frm.txt1.style.visibility = 'hidden';
            frm.txt2.style.visibility = 'visible';
            frm.tld.style.visibility = 'visible';
        }
    }
</script>
<div class="support_box">
    <div class="container">
        <div class="col-md-6">
            <h4 class="tz-title-4 tzcolor-blue">
                <p class="tzweight_Bold"><span class="m_1">Plan<br></span>Elegido</p>
            </h4>
            <div class="pricing-table-grid plan_box">
                <h4 style="text-align: center;"><span class="dollar">$</span>
                    <del>{{ $price->cost_before }} antes</del>
                    <br><span class="month">mensual</span></h4>
                <h3><span class="dollar">$</span>{{ $price->cost_month }}<br><span class="month">mensual</span></h3>
                <ul>
                    <li><span>{{ $price->name }}</span></li>
                    <li><a href="#">{{ $price->space_disk }}GB Espacio en disco</a></li>
                    <li><a href="#">{{ $price->transferencia }}GB Transferencia mensual</a></li>
                    <li><a href="#">{{ $price->email_account }} Cuentas de mail</a></li>
                    <li><a href="#">{{ $price->data_base }} Base de datos</a></li>
                    <li><a href="#">Acceso a web mail</a></li>
                    <li><a href="#">Subdominios Ilimitados</a></li>
                    <li><a href="#">{{ $price->ftp }} Cuentas de FTP</a></li>
                    <li><a href="#"><b>${{ $price->year_pay }} Pago Anual</b></a></li>
                    <li><a href="#">Soporte Full y Personalizado</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 contact_right">
            <h4 class="tz-title-4 tzcolor-blue">
                <p class="tzweight_Bold"><span class="m_1">Formulario<br></span>Registro</p>
            </h4>
            {!! Form::open(['method' => 'POST','route' => ['step2', $price->id],'class'=>'search-form domain-search']) !!}
            {{ csrf_field() }}
                <input type="radio" name="rad" checked="checked" onclick="mostrar(this.form,0)"/>
                <label for="txt1">¿Tenes registrado un nombre de dominio para tu web?</label>
                <br/>
                <input id="txt1" type="text" name="txt1" placeholder="ingresa tu dominio"/>
                <input type="radio" name="rad" onclick="mostrar(this.form,1)"/>
                <label for="txt2">¿Quiero registrar un nombre de dominio para mi web?</label>
                <input type="text" id="txt2" name="txt2" style="visibility:hidden; width: 70%"/>
                <select name="tld" style="visibility:hidden">
                    <option value="com">com</option>
                    <option value="net">net</option>
                </select>

                <input type="text" name="name" placeholder="Nombre" required>
                <input type="text" name="last_name" placeholder="Apellido" required>
                <input type="text" name="city" placeholder="Provincia" required>
                <input type="text" name="address" placeholder="Direccón" required>
                <input type="text" name="phone" placeholder="Teléfono" required>
                <input type="text" name="email" placeholder="Email" required>
                <select name="pago" required>
                    <option value="">Pago</option>
                    <option value="{{ $price->cost_month }}">Mensual ${{ $price->cost_month }}</option>
                    <option value="{{ $price->year_pay }}">Anual ${{ $price->year_pay }}</option>
                </select>
                <select name="formaPago" required>
                    <option value="">Método pago</option>
                    @foreach($payments as $payment)
                        <option value="{{ $payment->id }}">{{ $payment->method }}</option>
                    @endforeach
                </select>
            <input type="submit" value="continuar">
            {!! Form::Close() !!}
        </div>
        <div class="clearfix"></div>
    </div>
</div>