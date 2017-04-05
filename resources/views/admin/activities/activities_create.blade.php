@extends('layouts.admin.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
@stop

@section('breadcrumb')
@stop

@section('contenido')
@include('layouts.admin.partials._titulos_CRUD',['h1'=>'Activities','h2'=>'Create'])
<div class="content overflow-hidden">
    <div class="col-sm-12">
        <div CLASS="block block-bordered block-rounded block-themed ">
            {!! Form::open(['action'=> ['ActivityController@store'],'files' => 'true']) !!}
            <div class="block-header bg-primary">
                <h3 class="h4">@lang('general.newf',['name'=>'Activiy']) </h3>
            </div>
            <div class="block-content block-content-full block-content-narrow">
                @php $form = 'create'; @endphp
                @include('admin.activities._formulario_activities')
            </div>
            <div class="block-content border-t text-center">
                <div class="form-group">
                    <button class="btn btn-success btn-minw" type="submit">@lang('general.save')</button>
                    <a class="btn btn-danger btn-minw" href="{{ url()->previous() }}">@lang('general.cancel')</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

@section('scripts')
@include('layouts.admin.partials._ckeditor')
<!-- pendiente: genera error -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
@include('layouts.admin.partials._itinerary')

