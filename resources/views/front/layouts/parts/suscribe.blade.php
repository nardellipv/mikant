@include('front.layouts.parts.message_success')
<div class="subscribe-section">
    <div class="container">
        {!! Form::open(['method' => 'POST','route' => ['newsLetter'],'style'=>'display:inline']) !!}
        {{ csrf_field() }}
        <div class="subscribe-section-grids">
            <div class="col-md-8 subscribe col-sm-offset-2">
                <h3>Inscribite a nuestros newsletters</h3>
                <input type="text" class="text" name="name" placeholder="Nombre" style="width: 43%;color: #fff;font-size: 15px;padding: 12px;border: none;outline: none;background: #94c2dd;border: 2px solid #fff;">
                <input type="email" class="text" name="email" placeholder="email">
                <button type="submit" class="btn btn-info">Inscribir</button>
            </div>
            <div class="clearfix"></div>
        </div>
        {!! Form::Close() !!}
    </div>
</div>