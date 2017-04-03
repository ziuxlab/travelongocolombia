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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Actividades','h2'=>'Crear, Editar y Eliminar Actividades'])
    <div class="block">
        <div class="block-content">
            <a href="{{url('admin/activities/create')}}" class="btn btn-primary push"> + @lang('general.create')</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>@lang('general.tittle')</th>
                    <th class="hidden-xs">Url</th>
                    <th class="" style="width: 15%;">@lang('general.status')</th>
                    <th class="hidden-xs">Duration</th>
                    <th class="">@lang('general.language')</th>
                    <th class="text-center" style="width: 100px;">@lang('general.actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($activities as $activity)
                    <tr id="{{$activity->id}}">
                        <td class="text-capitalize">{{$activity->tittle}}</td>
                        <td class="hidden-xs">{{$activity->slug_url}}</td>
                        <td class="">
                            @if($activity->status == false)
                                <span class="label label-danger">Deshabilitado</span>
                            @else
                                <span class="label label-success">Habilitado</span>
                            @endif
                        </td>
                        <td>{{$activity->duration}}</td>
                        <td>{{$activity->local}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/activities/'. $activity->id . '/edit')}}"
                                   class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar Actividad"><i class="fa fa-pencil"></i></a>
                                <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $activity->id }}" title=""
                                        data-original-title="Eliminar Actividad"><i class="fa fa-times"></i>
                                    {!! Form::open(['action'=> ['ActivityController@destroy',$activity->id],'method'=>'delete','id'=>'item_'.$activity->id]) !!}
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
    @include('layouts.admin.partials._sweetalert', ['name'=>'La actividad'])
@stop