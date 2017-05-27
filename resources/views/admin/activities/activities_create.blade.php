@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('js/plugins/select2/select2.min.css')}}">
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Actividades','h2'=>'Crear actividad'])
    <div class="content overflow-hidden">
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::open(['action'=> ['ActivityController@store'],'files' => 'true']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Formulario de actividades</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @php $form = 'create'; @endphp
                    @include('admin.activities._formulario_activities')
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}">Cancelar</a>
                        <button class="btn btn-success btn-minw" type="submit">Crear</button>
                       
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
    <script>
        $(function(){
            App.initHelper('select2');
        });
    </script>
@stop

