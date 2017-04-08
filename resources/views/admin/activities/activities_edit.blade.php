@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
<link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
@stop

@section('breadcrumb')
@stop

@section('contenido')
@include('layouts.admin.partials._titulos_CRUD',['h1'=>'Activities','h2'=>'Edit'])
<div class="content overflow-hidden">

    <div class="col-sm-12">
        <div CLASS="block block-bordered block-rounded block-themed ">
            {!! Form::model($activity,['action'=> ['ActivityController@update',$activity->id],'method' => 'put','files' => 'true']) !!}
            <div class="block-header bg-primary">
                <h3 class="h4">@lang('general.detailsf',['name'=>'Activity'])</h3>
            </div>
            <div class="block-content block-content-full block-content-narrow">
                @php $form = 'edit'; @endphp
                @include('admin.activities._formulario_activities')
            </div>
            <div class="block-content border-t text-center">
                <div class="form-group">
                    <button class="btn btn-success btn-minw" type="submit">@lang('general.update')</button>  
                    <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}">@lang('general.cancel')</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    @include('admin.activities._formulario_photos')
</div>
@stop

@section('scripts')
@include('layouts.admin.partials._sweetalert', ['name'=>'La imagen'])
@include('layouts.admin.partials._itinerary')
@stop