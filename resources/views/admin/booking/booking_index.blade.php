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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Reservas','h2'=>'Ver y Eliminar Reservas'])
    <div class="block">
        <div class="block-content">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>@lang('general.name')</th>
                    <th class="">Price</th>
                    <th class="" style="width: 15%;">@lang('general.status')</th>
                    <th class="text-center" style="width: 100px;">@lang('general.actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $package)
                    <tr id="{{$package->id}}">
                        <td class="text-capitalize">{{$package->user->name}}</td>
                        <td class="hidden-xs">${{number_format($package->price) }}</td>
                        <td class="">
                            @if($package->status == 'paid')
                                <span class="label label-success">Pagado</span>
                            @else
                               
                                <span class="label label-danger">Pendiente</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/booking/'. $package->id )}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Ver Reserva"><i class="fa fa-pencil"></i></a>
                                <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $package->id }}" title=""
                                        data-original-title="Eliminar Reserva"><i class="fa fa-times"></i>
                                    {!! Form::open(['action'=> ['BookingController@destroy',$package->id],'method'=>'delete','id'=>'item_'.$package->id]) !!}
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
    
    @include('layouts.admin.partials._sweetalert', ['name'=>'La Reserva'])

@stop