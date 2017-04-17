@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
    <link rel="stylesheet" href="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
    <style type="text/css">
        input.loading {
            background: url(http://www.xiconeditor.com/image/icons/loading.gif) no-repeat right center;
        }
    </style>

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
@include('admin.flights._scripts_flights')

@stop