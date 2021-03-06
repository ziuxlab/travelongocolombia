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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Hoteles','h2'=>'Crear, Editar y Eliminar Hoteles'])
    <div class="block">
        <div class="block-content">
            @role('admin')
            <a href="{{url('admin/hotels/create')}}" class="btn btn-primary push"> + Crear Hotel</a>
            @endrole
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
                                <a href="{{url('admin/hotels/'. $package->id . '/edit')}}"
                                   class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar Hotel"><i class="fa fa-pencil"></i></a>
                                @role('admin')
                                <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $package->id }}" title=""
                                        data-original-title="Eliminar Hotel"><i class="fa fa-times"></i>
                                     {!! Form::open(['action'=> ['HotelController@destroy',$package->id],'method'=>'delete','id'=>'item_'.$package->id]) !!}
                                    {!! Form::close() !!}
                                </button>
                                @endrole
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $packages->links() }}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    
    @include('layouts.admin.partials._sweetalert', ['name'=>'El Hotel'])

@stop