@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">Vencimientos de Proyectos</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Vencimiento</th>
                                <th>Cliente</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->date_end }}</td>
                                    <td><a href="{{url('view', $project->client->id)}}">{{ $project->client->name }}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pull-right">
                            {!! $projects->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h6 class="panel-title">Último post</h6>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <div class="row">
                @foreach($lastPosts as $lastPost)
                    <div class="col-lg-6">
                        <ul class="media-list content-group">
                            <li class="media stack-media-on-mobile">
                                <div class="media-left">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="/storage/app/{{ ($lastPost->photo) }}"
                                                 class="img-responsive img-rounded media-preview" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="media-body">
                                    <h6 class="media-heading">{{ $lastPost->title }}</h6>
                                    <ul class="list-inline list-inline-separate text-muted mb-5">
                                        <li>{{ $lastPost->created_at }}</li>
                                    </ul>
                                    {!! substr($lastPost->body,0,100) !!}
                                </div>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection