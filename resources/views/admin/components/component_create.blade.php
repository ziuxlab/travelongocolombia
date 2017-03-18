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
    
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Componentes','h2'=>'Crear Componentes'])
    
    <div class="content overflow-hidden">
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::open(['action'=> ['ComponentController@store'],'files' => 'true']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Formulario de creación de Componentes</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @include('admin.components._formulario_component')
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}" >Cancelar</a>
                        <button class="btn btn-success btn-minw" type="submit">Crear</button>
                    </div>
              </div>
              {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    @include('layouts.admin.partials._ckeditor')
@stop