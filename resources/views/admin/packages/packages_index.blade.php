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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Paquetes','h2'=>'Crear, Editar y Eliminar Paquetes'])
    <div class="block">
        <div class="block-content">
            <a href="{{url('admin/packages/create')}}" class="btn btn-primary push"> + @lang('general.create')</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>@lang('general.tittle')</th>
                    <th class="hidden-xs">Url</th>
                    <th class="" style="width: 15%;">@lang('general.status')</th>
                    <th class="">@lang('general.days')</th>
                    <th class="">@lang('general.language')</th>
                    <th class="text-center" style="width: 100px;">@lang('general.actions')</th>
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
                        <td>{{$package->days}}</td>
                        <td>{{$package->local}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/packages/'. $package->id . '/edit')}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar Paquete"><i class="fa fa-pencil"></i></a>
                               <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $package->id }}" title=""
                                        data-original-title="Eliminar usuario"><i class="fa fa-times"></i>
                                   {!! Form::open(['action'=> ['PackagesController@destroy',$package->id],'method'=>'delete','id'=>'item_'.$package->id]) !!}
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
    
   @include('layouts.admin.partials._sweetalert', ['name'=>'El paquete'])

@stop