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
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Componentes','h2'=>'Crear, Editar y Eliminar Componentes'])
    <div class="block">
        <div class="block-content">
            <a href="{{url('admin/components/create')}}" class="btn btn-primary push"> + Crear Componente</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th class="">Página</th>
                    <th class="">Estado</th>
                    <th class="">Ubicación</th>
                    <th class="">Idioma</th>
                    <th class="text-center" style="width: 100px;">Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($components as $item)
                    <tr id="{{$item->id}}">
                        <td class="text-capitalize">{{$item->name}}</td>
                        <td class="hidden-xs">{{$item->page->name}}</td>
                        <td class="">
                                @if($item->status == false)
                                    <span class="label label-danger">Deshabilitado</span>
                                @else
                                    <span class="label label-success">Habilitado</span>
                                @endif
                        </td>
                        <td>{{$item->order_component}}</td>
                        <td>{{$item->local}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/components/'. $item->id . '/edit')}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar Componente"><i class="fa fa-pencil"></i></a>
                               <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $item->id }}" title=""
                                        data-original-title="Eliminar Componente"><i class="fa fa-times"></i>
                                   {!! Form::open(['action'=> ['ComponentController@destroy',$item->id],'method'=>'delete','id'=>'item_'.$item->id]) !!}
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
    
    <script src="{{ asset('js/plugins/sweetalert2/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery(".js-swal-confirm").on("click", function (e) {
                e.preventDefault();
                id = $(this).attr("data-id");
                data = $('#item_'+id).serialize();
                url = $('#item_'+id).attr('action');
                swal({
                    title: "¿Estás Seguro?",
                    text: "El Componente se eliminará de la base de datos!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonColor: "#1b8bf9",
                    cancelButtonColor: '#f55',
                    confirmButtonText: "Sí, Eliminar!",
                    cancelButtonText: 'No, Cancelar!',
                    html: !1,
                }).then(function (n) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: data,
                        success: function( msg ) {
                            swal({
                                title: "Confirmado!",
                                text: "El componente ha sido Borrada de la base de datos.",
                                type: "success",
                                confirmButtonColor: "#1b8bf9"
                            })
                            $('#'+id).remove();
                            
                        },
                        error: function( data ) {
                            swal({
                                title: "Error!",
                                text: "El componente no ha sido Borrada de la base de datos.",
                                type: "error",
                                confirmButtonColor: "#1b8bf9"
                            })
                        }
                    });
                })
            })
        })
    </script>

@stop