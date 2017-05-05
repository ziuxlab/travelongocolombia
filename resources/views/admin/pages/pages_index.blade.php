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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Páginas','h2'=>'Crear, Editar y Eliminar Páginas'])
    <div class="block">
        <div class="block-content">
            <a href="{{url('admin/pages/create')}}" class="btn btn-primary push"> + Crear página</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th class="hidden-xs">Url</th>
                    <th class="" style="width: 15%;">Estado</th>
                    <th class="">Ubicación</th>
                    <th class="">Idioma</th>
                    <th class="text-center" style="width: 100px;">Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr id="{{$page->id}}">
                        <td class="text-capitalize">{{$page->name}}</td>
                        <td class="hidden-xs">{{$page->slug_url}}</td>
                        <td class="">
                                @if($page->status == false)
                                    <span class="label label-danger">Deshabilitado</span>
                                @else
                                    <span class="label label-success">Habilitado</span>
                                @endif
                        </td>
                        <td>{{$page->menu_order}}</td>
                        <td>{{$page->local}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/pages/'. $page->id . '/edit')}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar Página"><i class="fa fa-pencil"></i></a>
                               <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $page->id }}" title=""
                                        data-original-title="Eliminar usuario"><i class="fa fa-times"></i>
                                   {!! Form::open(['action'=> ['PagesController@destroy',$page->id],'method'=>'delete','id'=>'item_'.$page->id]) !!}
                                   {!! Form::close() !!}
                               </button>
                               
                               
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{$pages->links()}}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    
    @include('layouts.admin.partials._sweetalert', ['name'=>'La página'])

@stop