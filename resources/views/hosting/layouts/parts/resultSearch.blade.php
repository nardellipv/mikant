<div class="about">
    <div class="container">
        <h1>Registrar<span class="m_1"><br>cuenta</span></h1>
    </div>
</div>
<div class="container">

        <h4 class="tz-title-4 tzcolor-blue">
            <p class="tzweight_Bold"><span class="m_1">Consulta<br></span>dominio</p>
        </h4>
        <p class="m_8 text-center">El estado del dominio <b>{{ $url }}</b> se encuentra
            @if(!$available)
                registrado <br />
                Buscar otro dominio
                @include('hosting.layouts.parts.searchDomain')
            @else
                disponible <br />
                Registrar Dominio + Hosting - A continuación elija un plan
                @include('hosting.layouts.parts.prices')
            @endif
        </p>
</div>