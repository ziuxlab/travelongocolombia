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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Servicios','h2'=>'Crear, Editar y Eliminar Servicios'])
    <div class="block">
        <div class="block-content">
            <a href="{{url('admin/services/create')}}" class="btn btn-primary push"> + Crear Servicio</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>TÍtulo</th>
                    <th class="hidden-xs">Url</th>
                    <th class="" style="width: 15%;">estado</th>
                    <th class="">lenguaje</th>
                    <th class="text-center" style="width: 100px;">Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($packages as $package)
                    <tr id="{{$package->id}}">
                        <td class="text-capitalize">{{$package->tittle}}</td>
                        <td class="hidden-xs">{{$package->slug_url}}</td>
                        <td class="">
                                @if($package->status == false)
                                    <span class="label label-danger">Deshabilitado</span>
                                @else
                                    <span class="label label-success">Habilitado</span>
                                @endif
                        </td>
                        <td>{{$package->local}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/services/'. $package->id . '/edit')}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar Servicio"><i class="fa fa-pencil"></i></a>
                               <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $package->id }}" title=""
                                        data-original-title="Eliminar Servicio"><i class="fa fa-times"></i>
                                   {!! Form::open(['action'=> ['ServicesController@destroy',$package->id],'method'=>'delete','id'=>'item_'.$package->id]) !!}
                                   {!! Form::close() !!}
                               </button>
                               
                               
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">{{$packages->links()}}</div>
        </div>
    </div>
@stop

@section('scripts')
    
   @include('layouts.admin.partials._sweetalert', ['name'=>'El Servicio'])

@stop