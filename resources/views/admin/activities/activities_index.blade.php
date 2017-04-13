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
@include('layouts.admin.partials._titulos_CRUD',['h1'=>trans('form_product.activities'),'h2'=>trans('form_product.actions_sub')])
<div class="block">
    <div class="block-content">
        <!-- content -->
            <div id="content"></div>
        <!-- end content -->
 </div>
</div>
@stop

@section('scripts')
@include('layouts.app.partials._list', ['type'=> 1])
@stop