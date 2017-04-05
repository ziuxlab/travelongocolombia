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
@include('layouts.admin.partials._titulos_CRUD',['h1'=>'Activities','h2'=>'Create, Edit and Delete'])
<div class="block">
    <div class="block-content">
        <a href="{{url('admin/activities/create')}}" class="btn btn-primary push"> + @lang('general.create')</a>

        <!-- activities -->
            <div id="content"></div>
        <!-- end activities -->

 </div>
</div>
@stop

@section('scripts')
@include('layouts.admin.partials._sweetalert', ['name'=>'La actividad'])
@include('layouts.app.partials._list', ['type'=> 1])
@stop