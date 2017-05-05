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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Mensajes','h2'=>'Ver y Eliminar Mensajes'])
    <div class="block">
        <div class="block-content">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>@lang('general.name')</th>
                    <th class="hidden-xs">mensaje</th>
                    <th class="" style="width: 15%;">Email</th>
                    <th class="text-center" style="width: 100px;">@lang('general.actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $package)
                    <tr id="{{$package->id}}">
                        <td class="text-capitalize">{{$package->name}}</td>
                        <td class="hidden-xs">{{$package->message}}</td>
                        <td>{{$package->email}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/messages/'. $package->id )}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Ver Mensaje"><i class="fa fa-pencil"></i></a>
                                <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $package->id }}" title=""
                                        data-original-title="Eliminar Mensaje"><i class="fa fa-times"></i>
                                    {!! Form::open(['action'=> ['MessagesController@destroy',$package->id],'method'=>'delete','id'=>'item_'.$package->id]) !!}
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
    
    @include('layouts.admin.partials._sweetalert', ['name'=>'El Mensaje'])

@stop