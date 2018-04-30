<header class="clearfix">
    <div id="logo"><img src="{{ asset('images/imglogoSinfondoPequenia.png') }}"/></div>
    <h1>Recibo</h1>
    <table style="height: 111px;" width="715">
        <tbody>
        <tr>
            <td style="width: 331px;">
                <p>Ejercito Argentino, Las Heras</p>
                <p>Mendoza, Argentina</p>
                <p>2615965966</p>
            </td>
            <td style="width: 368px;">
                <h5 class="text-uppercase text-semibold" style="text-align: right;">RECIBO #{!! $invoice !!}</h5>
                <p style="text-align: right;">Fecha Inicio:&nbsp;<span class="text-semibold">{!! $date_start !!}</span>
                </p>
                <p style="text-align: right;">Fecha Vencimiento:&nbsp;<span
                            class="text-semibold">{!! $date_end !!}</span></p>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="clearfix">&nbsp;</div>
    <div id="company" class="clearfix">&nbsp;</div>
    <div class="clearfix">
        <table style="height: 108px; width: 711px;">
            <tbody>
            <tr>
                <td style="width: 334px;">
                    <h5>{!! $name !!} {!! $last_name !!}</h5>
                    <p><span class="text-semibold">{!! $city !!}</span></p>
                    <p>{!! $address !!}</p>
                    <p>{!! $phone !!}</p>
                    <p>{!! $email !!}</p>
                </td>
                <td style="width: 363px; text-align: right;"><span class="text-muted">Detalles del Pago:</span>
                    <h5 style="text-align: right;">Total:<span class="text-right text-semibold">${!! $price !!}</span>
                    </h5>
                    <p style="text-align: right;">Balance:<span class="text-semibold">${!! $balance !!}</span></p>
                </td>
            </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
        <table style="height: 30px;" width="100%">
            <tbody>
            <tr>
                <td style="width: 170px;">Descripción</td>
                <td style="width: 170px;">Precio</td>
                <td style="width: 170px;">Cantidad</td>
                <td style="width: 171px;">Total</td>
            </tr>
            <tr>
                <td style="width: 170px;">{!! $description !!}</td>
                <td style="width: 170px;">${!! $price !!}</td>
                <td style="width: 170px;">{!! $quantity !!}</td>
                <td style="width: 171px;">${!! $total !!}</td>
            </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
        <p style="text-align: center;"><em><strong>Gracias por confiar en MikAnt.</strong></em></p>
        <div><span style="color: #0000ff;"><strong>Pablo Nardelli</strong></span></div>
        <div>&nbsp;</div>
        <div><em>seguinos:&nbsp;</em></div>
        <div><a href="https://www.facebook.com/mikanthost/" target="_blank" rel="noopener"><img
                        src="https://ci6.googleusercontent.com/proxy/2pE3THDuYgqJQ9i3X0aXo59kq4SwGSEDorfJLs4HlQk7uODq7vkwpOpvw0PDrkUxfTxcg6iUOKRnXhfFNpCKwwVIZYYFNUftSetXRW81GXEwp3iZ2_QCGOCyDEMB_MyBoXWAZ-S-y-J6RPXWeq6EdGRmioWIGlyVDaD2F7OUCJNFN1rgllHBn-Gm_ggoF_Wl703GzuaDqvYOvYw=s0-d-e1-ft#https://docs.google.com/uc?export=download&amp;id=0B08urs3B_dZvMjNLQWtyalVVZEk&amp;revid=0B08urs3B_dZvZXJrQW1TcjEwNDhXTitLNjQ2azRkODVZUWwwPQ"/></a>&nbsp;<a
                    href="https://twitter.com/mikantweb" target="_blank" rel="noopener"><img
                        src="https://ci3.googleusercontent.com/proxy/5tEl1v7EN4x8AOt0FjXaSHmpWaDQEQEy54j-1kLHoXHwknDtoO5NU5u-caNWk9igS5kZ3hfb3QTM1sIdLzl6R07bv-DrMdYybpjgbhqw1b-SnRmolcNsjNEQydXU6UaX6_9FUgTZs-7YQlaFSKsdLi2LGtxBwJm0bGWzUmjNPPr--zCCp6x2z_olgVN_-lg1RmhGGYyW8drzCuc=s0-d-e1-ft#https://docs.google.com/uc?export=download&amp;id=0B08urs3B_dZvV0FwZl9jTWZiWWM&amp;revid=0B08urs3B_dZvb2tDeDFmd0J2RXZ2ZU9VSGxDdCtZT1Nsdzd3PQ"/></a>
        </div>
        <div>&nbsp;</div>
        <div><strong>Tel:</strong>&nbsp;2615965966</div>
        <div><strong>Skype:&nbsp;</strong><a href="mailto:neri022@hotmail.com" target="_blank" rel="noopener">neri022@hotmail.com</a>
        </div>
        <div><strong>HelpDesk:</strong>&nbsp;<a href="mailto:helpdesk@mikant.com" target="_blank" rel="noopener">helpdesk@mikant.com</a>
        </div>
        <div>&nbsp;</div>
        <p><a href="http://www.mikant.com/" target="_blank" rel="noopener"><img
                        src="{{ asset('images/imglogoSinfondoPequenia.png') }}"/></a></p>
        <p>&nbsp;</p>
    </div>
</header>