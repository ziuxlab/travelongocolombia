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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Suscripciones','h2'=>'Ver y Eliminar Suscripciones'])
    <div class="block">
        <div class="block-content">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Email</th>
                    <th class="text-center" style="width: 100px;">Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($suscriptores as $suscriptor)
                    <tr id="{{$suscriptor->id}}">
                        <td>{{$suscriptor->email}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $suscriptor->id }}" title=""
                                        data-original-title="Eliminar Suscriptor"><i class="fa fa-times"></i>
                                    {!! Form::open(['action'=> ['SubscriptionController@destroy',$suscriptor->id],'method'=>'delete','id'=>'item_'.$suscriptor->id]) !!}
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
    
    @include('layouts.admin.partials._sweetalert', ['name'=>'El Email'])

@stop