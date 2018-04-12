@foreach($publications as $publication)
<div class="bloger-grid">
    <div class="blog-img">
        <img src="{{ asset($publication->photo) }}" title="{{ $publication->title }}" />
    </div>
    <div class="bloger-content">
        <h5><a href="{{ url('single', $publication->id) }}">{{ $publication->title }}</a></h5>
        <p>{!! substr($publication->body, 0, 250) !!}</p>
        <ul>
            <li>Publicado:</li>
            <li> {{ Date::parse($publication->created_at)->format('d/m/Y') }}</li>
            <li><a href="{{ url('single', $publication->id) }}"><span>Leer más...</span></a></li>
        </ul>
    </div>
    <div class="clear"> </div>
</div>
@endforeach

