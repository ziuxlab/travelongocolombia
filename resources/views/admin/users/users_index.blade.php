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
    
    @include('layouts.admin.partials._titulos_CRUD',['h1'=>'Usuarios','h2'=>'Crear, Editar y Eliminar Usuarios'])
    
    <div CLASS="block">
        <div class="block-content">
            <a href="{{url('admin/users/create')}}" class="btn btn-primary push"> + Crear usuario</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th class="hidden-xs">Correo</th>
                    <th class="" style="width: 15%;">Acceso</th>
                    <th class="text-center" style="width: 100px;">Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr id="{{$user->id}}">
                        <td class="text-capitalize">{{$user->name}}</td>
                        <td class="hidden-xs">{{$user->email}}</td>
                        <td class="">
                            @foreach($user->roles as $role)
                                @if($role->name == 'Admin')
                                    <span class="label label-danger">{{$role->name}}</span>
                                @else
                                    <span class="label label-success">{{$role->name}}</span>
                                @endif
                            @endforeach
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{url('admin/users/'. $user->id . '/edit')}}" class="btn btn-xs btn-default"
                                   type="button" data-toggle="tooltip" title=""
                                   data-original-title="Editar usuario"><i class="fa fa-pencil"></i></a>
                               <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                                        data-toggle="tooltip" data-id="{{ $user->id }}" title=""
                                        data-original-title="Eliminar usuario"><i class="fa fa-times"></i>
                                   {!! Form::open(['action'=> ['UsersController@destroy',$user->id],'method'=>'delete','id'=>'usuario_'.$user->id]) !!}
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
                data = $('#usuario_'+id).serialize();
                url = $('#usuario_'+id).attr('action');
                swal({
                    title: "¿Estás Seguro?",
                    text: "EL Usuario se eliminará de la base de datos!",
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
                                text: "El Usuario ha sido Borrado de la base de datos.",
                                type: "success",
                                confirmButtonColor: "#1b8bf9"
                            })
                            $('#'+id).remove();
                            
                        },
                        error: function( data ) {
                            swal({
                                title: "Error!",
                                text: "El Usuario no ha sido Borrado de la base de datos.",
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