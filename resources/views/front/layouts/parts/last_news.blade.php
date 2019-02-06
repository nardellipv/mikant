<div class="last_news" id="blog">
    <div class="container">
        <div class="last_news">
            <header>
                <h3>Últimas notas del blog</h3>
                <a href="{{ url('post') }}" class="btn btn-info" target="_blank">ir al blog</a>
            </header>
        </div>
        @foreach($publications as $publication)
            <div class="col-md-4 grid_7">
                <div class="element">
                    <a href="{{ url('single', $publication->slug) }}">
                        <img src="/storage/app/{{ ($publication->photo) }}" alt="{{$publication->photo}}">

                        <h4>{{ $publication->title }}</h4>
                        <p>{!! substr($publication->body, 0, 200) !!}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>