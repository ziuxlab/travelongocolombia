@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
@stop

@section('breadcrumb')
@stop

@section('contenido')
    
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Usuarios','h2'=>'Crear, Editar y Eliminar Usuarios'])
    
    <div CLASS="block">
        <div class="block-content">
            <a href="{{url('admin/users/create')}}" class="btn btn-primary push"> + Crear usuario</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th class="hidden-xs">Correo</th>
                    <th class="" style="width: 15%;">Acceso</th>
                    <th class="text-center" style="width: 100px;">Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr id="{{$user->id}}">
                        <td class="text-capitalize">{{$user->name}}</td>
                        <td class="hidden-xs">{{$user->email}}</td>
                        <td class="">
                            @foreach($user->roles as $role)
                                @if($role->name == 'Admin')
                                    <span class="label label-danger">{{$role->name}}</span>
                                @else
                                    <span class="label label-success">{{$role->name}}</span>
                                @endif
                            @endforeach
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/users/'. $user->id . '/edit')}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar usuario"><i class="fa fa-pencil"></i></a>
                               <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $user->id }}" title=""
                                        data-original-title="Eliminar usuario"><i class="fa fa-times"></i>
                                   {!! Form::open(['action'=> ['UsersController@destroy',$user->id],'method'=>'delete','id'=>'item_'.$user->id]) !!}
                                   {!! Form::close() !!}
                               </button>
                               
                               
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('scripts')
    @include('layouts.admin.partials._sweetalert', ['name'=>'El Usuario'])

@stop