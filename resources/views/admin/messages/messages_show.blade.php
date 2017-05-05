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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Mensaje','h2'=>'Ver Mensaje'])
    <div class="content overflow-hidden">
        <div class="col-sm-12">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::model($message) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Mensaje</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @include('admin.messages._formulario_messages')
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        
        
    </div>
@stop

@section('scripts')
   
@stop