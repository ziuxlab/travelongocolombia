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
                  @include('admin.flights._flights_formulario')
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}">Cancelar</a>
                        <button class="btn btn-success btn-minw" type="submit">@lang('general.save')</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!--
        <div class="col-sm-12">
            <div class="block block-bordered block-rounded block-themed " id="results">
                <div class="block-header bg-primary">
                    <h3 class="h4">Resultados de vuelos</h3>
                </div>
                <div id="flights-response" class="block-content block-content-full block-content-narrow">
                
                
                </div>
            </div>
        </div>
        -->
    </div>
@stop

@section('scripts')
@include('admin.flights._scripts_flights')

@stop