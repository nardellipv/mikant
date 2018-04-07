@include('front.layouts.parts.message_success')
<div class="subscribe-section">
    <div class="container">
        {!! Form::open(['method' => 'POST','route' => ['newsLetter'],'style'=>'display:inline']) !!}
        {{ csrf_field() }}
        <div class="subscribe-section-grids">
            <div class="col-md-8 subscribe">
                <h3>Inscribite a nuestros newsletters</h3>
                <input type="email" class="text" name="email">
                <button type="submit" class="btn btn-info">Inscribir</button>
            </div>
            <div class="clearfix"></div>
        </div>
        {!! Form::Close() !!}
    </div>
</div>