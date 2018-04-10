@if (Session::has('message'))
    <p class="alert alert-success">{!! Session::get('message') !!}</p>
@endif