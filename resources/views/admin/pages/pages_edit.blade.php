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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Páginas','h2'=>'Editar Páginas'])
    <div class="content overflow-hidden">
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::model($page,['action'=> ['PagesController@update',$page->id],'method' => 'put','files' => 'true']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Formulario para editar un Página</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @include('admin.pages._formulario_pages')
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
    @include('layouts.admin.partials._ckeditor')
@stop