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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Categorías','h2'=>'Crear, Editar y Eliminar Categorías'])
    <div class="block">
        <div class="block-content">
            <a href="{{url('admin/categories/create')}}" class="btn btn-primary push"> + Crear Categoría</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Category</th>
                    <th class="">Categoría</th>
                    <th class="text-center" style="width: 15%;">Menú</th>
                    <th class="text-center hidden-xs">icon</th>
                    <th class="text-center">tipo</th>
                    <th class="text-center" style="width: 100px;">Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($features as $feature)
                    <tr id="{{$feature->id}}">
                        <td class="text-capitalize">{{$feature->feature}}</td>
                        <td class="text-capitalize">{{$feature->feature_es}}</td>
                        <td class="text-center">
                            @if($feature->in_categories == false)
                                <span class="label label-danger">No</span>
                            @else
                                <span class="label label-success">Si</span>
                            @endif
                        </td>
                        <td class="text-center hidden-xs"><i class="{{$feature->icon}}"></i></td>
                        
                        <td class="text-center"> @if($feature->type == 0)
                                <span class="badge badge-primary">Paquete</span>
                            @elseif($feature->type == 1)
                                <span class="badge badge-success">Actividad</span>
                            @elseif($feature->type == 2)
                                <span class="badge badge-danger">Hotel</span>
                            @elseif($feature->type == 4)
                                <span class="badge badge-default">Servicio Adicional</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/categories/'. $feature->id . '/edit')}}"
                                   class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar Categoría"><i class="fa fa-pencil"></i></a>
                                <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $feature->id }}" title=""
                                        data-original-title="Eliminar Categoría"><i class="fa fa-times"></i>
                                    {!! Form::open(['action'=> ['FeaturesController@destroy',$feature->id],'method'=>'delete','id'=>'item_'.$feature->id]) !!}
                                    {!! Form::close() !!}
                                </button>
                            
                            
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">{{$features->links()}}</div>
        </div>
    </div>
@stop

@section('scripts')
    
    @include('layouts.admin.partials._sweetalert', ['name'=>'La Categoría'])

@stop