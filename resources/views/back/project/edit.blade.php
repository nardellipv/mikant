@extends('back.layouts.main')
@section('style')
    <script type="text/javascript"
            src="{{ asset('styleBack/assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('styleBack/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/pages/form_layouts.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

@endsection
@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <!-- Basic layout-->
            {!! Form::model($project, ['method' => 'PATCH','route' => ['projects.update', $project->id],'class'=>'form-horizontal']) !!}
            {{ csrf_field() }}
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" value="{{ $project->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Fecha
                            <small>(inicio-fin)</small>
                            :</label>
                        <div class="col-lg-9">
                            <div class="input-group input-daterange">
                                <input id="startDate1" name="date_start" type="text"
                                       class="form-control" readonly="readonly" value="{{ $project->date_start }}">
                                <span class="input-group-addon">
                		</span>
                                <span class="input-group-addon">a</span>
                                <input id="endDate1" name="date_end" type="text" class="form-control"
                                       readonly="readonly" value="{{ $project->date_end }}">
                                <span class="input-group-addon">
		                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Oberservación:</label>
                            <div class="col-lg-9">
                                <textarea rows="3" cols="5" name="observation" class="form-control">{{ $project->observation }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Clientes:</label>
                            <div class="col-lg-9">
                                <select name="client_id" data-placeholder="Seleccionar cliente" class="select">
                                    <option value="{{ $project->client->id }}">{{ $project->client->name }}</option>
                                    <option>--------------------------------------------------------------------------------</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Estado:</label>
                            <div class="col-lg-9">
                                <select name="status" class="form-control">
                                    <option value="{{ $project->status_id }}">{{ $project->status }}</option>
                                    <option>-----------</option>
                                    <option value="BEGINNING">Por Iniciar</option>
                                    <option value="IN PROGRESS">En Progreso</option>
                                    <option value="TERMINATED">Terminado</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Editar Proyecto <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            {!! Form::Close() !!}
            <!-- /basic layout -->

            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.input-daterange').datepicker({
                    format: 'yyyy-mm-dd'
                });
            });
        </script>

@endsection