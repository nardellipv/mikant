<div class="domain" id="dominio">
    <div class="container">
        {!! Form::open(['method' => 'POST','route' => ['search'],'class'=>'search-form domain-search']) !!}
        {{ csrf_field() }}
        <div class="two-fifth column first">
            <img src="{{ asset('styleHosting/images/search.png') }}" alt=""/>
            <h2><span class="m_1">Busca tu</span><br>dominio</h2>
        </div>
        <div class="three-fifth column first">
            <input type="text" name="search" class="text" placeholder="Ingresa tu dominio">
        </div>
        <div class="one-fifth column">
                                    	<span class="selection-box"><select class="domains valid" name="domains">
                                        	<option>.com</option>
                                        	<option>.net</option>
                                        </select></span>
        </div>
        {{--<div class="one-fifth column">
                                    <span class="selection-box"><select class="domains valid" name="domains">
                                        <option>Year(0-1 Year)</option>
                                        <option>.info (From $3 / Year)</option>
                                        <option>.net (From $3 / Year)</option>
                                        <option>.org (From $3 / Year)</option>
                                    </select></span>
        </div>--}}
        <div class="one-fifth column">
            <input type="submit" value="Buscar">
        </div>
        <div class="clearfix"></div>
        {!! Form::Close() !!}
    </div>
</div>