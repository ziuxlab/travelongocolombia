@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
    <link rel="stylesheet" href="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">

@stop

@section('breadcrumb')
@stop

@section('contenido')
    
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Vuelos','h2'=>'Probar buscador de vuelos Páginas'])
    
    <div class="content overflow-hidden">
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed " >
                {!! Form::open(['action'=> ['FlightController@store'],'id' => 'flights']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Buscador de vuelos</h3>
                </div>
                <div class="block-content block-content-full ">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('departure') ? ' has-error' : '' }}">
                                        {!! Form::label('Origen:', null, ['class' => 'control-label']) !!}
                                        {!! Form::text('departure', old('departure'), ['id'=>'departure',
                                        'class' => 'js-autocomplete form-control','placeholder'=>'Ingrese su Origen','required']) !!}
                                        @if ($errors->has('departure'))
                                            <span class="help-block">
                                       <strong>{{ $errors->first('departure') }}</strong>
                                   </span>
                                        @endif
                                        {!! Form::hidden('departure_id', old('departure_id'), ['class'=>'airport']) !!}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('destination') ? ' has-error' : '' }}">
                                        {!! Form::label('Destino:', null, ['class' => 'control-label']) !!}
                                        {!! Form::text('destination', old('destination'), ['id'=>'destination',
                                        'class' => 'js-autocomplete form-control','placeholder'=>'Ingrese su Destino','required']) !!}
                                        @if ($errors->has('destination'))
                                            <span class="help-block">
                                           <strong>{{ $errors->first('destination') }}</strong>
                                       </span>
                                        @endif
                                        {!! Form::hidden('destination_id', old('destination_id'), ['class'=>'airport']) !!}
                                    </div>
                                </div>
                            </div>
                        
                        
                        </div>
                        <div class="col-sm-4">
                            
                            <div class="form-group {{ $errors->has('checkout') || $errors->has('checkin') ? ' has-error' : '' }}">
                                {!! Form::label('Fecha de Ida y de Regreso:', null, ['class' => 'control-label']) !!}
                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                    {!! Form::text('checkin', old('checkin'), ['class' => 'js-datepicker form-control','required','placeholder'=>'Desde']) !!}
                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                    {!! Form::text('checkout', old('checkout'), ['class' => 'js-datepicker form-control','required','placeholder'=>'Hasta']) !!}
                                </div>
                                @if ($errors->has('checkout'))
                                    <span class="help-block">
                                               <strong>{{ $errors->first('checkout') }}</strong>
                                           </span>
                                @endif
                                @if ($errors->has('checkin'))
                                    <span class="help-block">
                                               <strong>{{ $errors->first('checkin') }}</strong>
                                           </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group {{ $errors->has('adults')  ? ' has-error' : '' }}">
                                        {!! Form::label('Adultos:', null, ['class' => 'control-label']) !!}
                                        {!! Form::number('adults', old('adults') or 1, ['class' => 'form-control','required']) !!}
                                        @if ($errors->has('adults'))
                                            <span class="help-block">
                                               <strong>{{ $errors->first('adults') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group {{ $errors->has('children') ? ' has-error' : '' }}">
                                        {!! Form::label('Niños:', null, ['class' => 'control-label']) !!}
                                        {!! Form::number('children', old('children') or 0, ['class' => 'form-control']) !!}
                                        @if ($errors->has('children'))
                                            <span class="help-block">
                                               <strong>{{ $errors->first('children') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group {{ $errors->has('infants') ? ' has-error' : '' }}">
                                        {!! Form::label('Bebés:', null, ['class' => 'control-label']) !!}
                                        {!! Form::number('infants', old('infants') or 0, ['class' => 'form-control']) !!}
                                        @if ($errors->has('infants'))
                                            <span class="help-block">
                                               <strong>{{ $errors->first('infants') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}">Cancelar</a>
                        <button class="btn btn-success btn-minw" type="submit">Buscar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="block block-bordered block-rounded block-themed " id="results">
                <div class="block-header bg-primary">
                    <h3 class="h4">Resultados de vuelos</h3>
                </div>
                <div id="flights-response" class="block-content block-content-full block-content-narrow">
                
                
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.js') }}"></script>
    <script>
        $(function () {
            App.initHelper('datepicker');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery(".btn-success").button().click( function (e) {
                //App.blocks('#results', 'refresh_toggle');
                console.log(1)
                e.preventDefault();
                id    = $(this).attr("data-id");
                data  = $('#flights').serialize();
                url   = $('#flights').attr('action');
                table = '';
                
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function (data) {
                        //App.blocks('#results', 'refresh_toggle');
                        $('#flights-response').html(data)
                    },
                    error: function (data) {
                        //App.blocks('#results', 'refresh_toggle');
                        swal({
                            title: "Error!",
                            text: "Ha ocurrido un error en la busqueda",
                            type: "error",
                            confirmButtonColor: "#1b8bf9"
                        })
                    }
                });
            })
            
        })
    </script>
    <script>
        $('.js-autocomplete').keyup(function () {
            var query = $(this).val();
            var url = '{{url("admin/flights/buscar")}}' + '/' + query;
            if (query.length > 2) {
                //Create list for results
                $(this).after('<div class="autosugest push-10-t"></div>');
                //Prevent redrawing/binding of list
                //Add results to the list
                Buscar(url, $(this));
            }
        })
        
        function Buscar(url, e) {
            $.ajax({
                dataType: "json",
                type: 'GET',
                url: url,
                success: function (data) {
                    padre    = $(e).parent();
                    objetivo = padre.find('.autosugest');
                    objetivo.html('');
                    for (term in data) {
                        objetivo.append('<a class="list-group-item " href="#" data-id="' + data[term]['data']
                                + '"  data-airport="' + data[term]['value'] + '" onclick="cargar(this)" id="2">' +
                                data[term]['value'] + '<span class="text-muted"> - ' + data[term]['pais'] + "</span></a>");
                    }
                },
                error: function (data) {
                    return data;
                }
            });
        }
        
        
        function cargar(e) {
            padre = $(e).parent().parent();
            padre.find('.js-autocomplete').val($(e).data('airport'));
            padre.find('.airport').val($(e).data('id'));
            padre.find('.autosugest').remove();
        }
    
    
    </script>

@stop