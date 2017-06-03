@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop


@section('breadcrumb')
@stop

@section('contenido')
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Categoría','h2'=>'Editar Categoría'])
    <div class="content overflow-hidden">
        
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::model($feature,['action'=> ['FeaturesController@update',$feature->id],'method' => 'put']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Formulario para editar una Categoría</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @include('admin.features._formulario_feature')
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}">Cancelar</a>
                        <button class="btn btn-success btn-minw" type="submit">Actualizar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        
        
    </div>
@stop
