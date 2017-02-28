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
    
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Usuarios','h2'=>'Editar Usuarios'])
    
    <div class="content overflow-hidden">
        <div class="col-sm-8 col-sm-offset-2">
            <div CLASS="block block-bordered block-rounded block-themed ">
                {!! Form::model($user,['action'=> ['UsersController@update',$user->id],'method' => 'put','files' => 'true']) !!}
                <div class="block-header bg-primary">
                    <h3 class="h4">Formulario para editar un usuario</h3>
                </div>
                <div class="block-content block-content-full block-content-narrow">
                    @include('admin.users._formulario_usuarios')
                </div>
                <div class="block-content border-t text-center">
                    <div class="form-group">
                        <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}" >Cancelar</a>
                        <button class="btn btn-success btn-minw" type="submit">Editar</button>
                    </div>
              </div>
              {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop