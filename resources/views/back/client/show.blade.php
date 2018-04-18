@extends('back.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Cliente <b>{{ $client->name }}</b></h6>
                </div>

                <div class="panel-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs bg-teal-400">
                            <li class="active"><a href="#colored-tab1" data-toggle="tab">Datos Personales</a></li>
                            <li><a href="#colored-tab2" data-toggle="tab">Proyectos</a></li>
                            <li><a href="#colored-tab3" data-toggle="tab">Facturacion</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="colored-tab1">
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- Collapsible list -->
                                        <div class="panel panel-flat">
                                            <div class="panel-heading">
                                            </div>
                                            <ul class="media-list media-list-linked">
                                                <li class="media">
                                                    <div class="media-link cursor-pointer" data-toggle="collapse"
                                                         data-target="#james">

                                                        <div class="media-body">
                                                            <div class="media-heading text-semibold">
                                                                <b>{{ $client->name }} {{ $client->last_name }}</b>
                                                            </div>
                                                        </div>
                                                        <div class="media-right media-middle text-nowrap">
                                                            <i class="icon-menu7 display-block"></i>
                                                        </div>
                                                    </div>

                                                    <div class="collapse" id="james">
                                                        <div class="contact-details">
                                                            <ul class="list-extended list-unstyled list-icons">
                                                                <li><i class="icon-city position-left"></i>
                                                                    {{ $client->city }}
                                                                </li>
                                                                <li><i class="icon-pin position-left"></i>
                                                                    {{ $client->address }}
                                                                </li>
                                                                <li><i class="icon-phone position-left"></i>
                                                                    {{ $client->phone }}
                                                                </li>
                                                                <li><i class="icon-mail5 position-left"></i>
                                                                    {{ $client->email }}
                                                                </li>
                                                                <li><i class="icon-add position-left"></i>
                                                                    {{ $client->created_at }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                        <!-- /collapsible list -->

                                    </div>


                                </div>
                            </div>


                            <div class="tab-pane" id="colored-tab2">
                                @foreach($projects as $key=> $project)
                                    <div class="col-md-12">

                                        <!-- Collapsible list -->
                                        <div class="panel panel-flat">
                                            <div class="panel-heading">
                                            </div>
                                            <ul class="media-list media-list-linked">
                                                <li class="media">
                                                    <div class="media-link cursor-pointer" data-toggle="collapse"
                                                         data-target="#project{{$key}}">

                                                        <div class="media-body">
                                                            <div class="media-heading text-semibold">
                                                                <b>{{ $project->name }}</b><br>
                                                                <span class="text-muted">{{ $project->status }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="media-right media-middle text-nowrap">
                                                            <i class="icon-menu7 display-block"></i>
                                                        </div>
                                                    </div>

                                                    <div class="collapse" id="project{{$key}}">
                                                        <div class="contact-details">
                                                            <ul class="list-extended list-unstyled list-icons">
                                                                <li><i class="icon-add position-left"></i>
                                                                    {{ $project->date_start }}
                                                                </li>
                                                                <li><i class="icon-exclamation position-left"></i>
                                                                    {{ $project->date_end }}
                                                                </li>
                                                                <li><i class="icon-quotes-left position-left"></i>
                                                                    {{ $project->observation }}
                                                                </li>
                                                                <li><i class="icon-traffic-lights position-left"></i>
                                                                    {{ $project->status }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                        <!-- /collapsible list -->

                                    </div>
                                @endforeach
                            </div>

                            <div class="tab-pane" id="colored-tab3">
                                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                whatever.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection