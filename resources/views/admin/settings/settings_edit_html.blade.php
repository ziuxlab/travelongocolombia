@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
@stop

@section('breadcrumb')
@stop

@section('contenido')
    
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Configuración '.$url,'h2'=>'Editar configuraciones '.$url])
    
    <div class="content overflow-hidden">
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::model($settings,['action'=> ['ConfigController@update',$url],'method' => 'put','files' => 'true']) !!}
    
                <div class="block-header bg-primary">
                    <h3 class="h4">Formulario de Configuración {{$url}}</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @include('admin.settings._formulario_settings_'.$url)
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}" >Cancelar</a>
                        <button class="btn btn-success btn-minw" type="submit">Guardar</button>
                    </div>
              </div>
              {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
   
@stop