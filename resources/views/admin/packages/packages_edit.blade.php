@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/select2/select2.min.css')}}">
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Paquete','h2'=>'Editar Paquete'])
    <div class="content overflow-hidden">
        
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::model($package,['action'=> ['ProductController@update',$package->id],'method' => 'put','files' => 'true']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Formulario para editar un Paquete</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @include('admin.packages._formulario_packages')
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
    
        @include('admin.packages._formulario_photos')
        
    </div>
@stop

@section('scripts')
    @include('layouts.admin.partials._ckeditor')
    @include('layouts.admin.partials._sweetalert', ['name'=>'La imagen'])
    <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
    <script>
        $(function(){
            App.initHelper('select2');
        });
    </script>
@stop