@extends('layouts.app.app')

@section('title')
    @if(Session::get('step') == null)
        {{$item->tittle}}
    @elseif(Session::get('step') == 1)
        @lang('general.enter information')
    @elseif(Session::get('step') == 2)
        @lang('general.search') @lang('general.hotels')
    @elseif(Session::get('step') == 3)
        @lang('general.search') @lang('general.activities')
    @elseif(Session::get('step') == 4)
        @lang('general.additional services')
    @else
        @lang('general.proceed checkout')
    @endif

@stop

@section('keywords')
    {{$item->keywords or $Config->keywords}}
@stop

@section('description')
    {{$item->meta_description or $Config->meta_description}}
@stop

@section('style')
    <link rel="stylesheet" href="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick-theme.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.css">
    
    {{$Config->css}}
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @if(Session::get('step') == null)
        @include('app.design._step_1')
    @else
        @include('app.design._step_'.Session::get('step'))
    @endif
@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $(function () {
            App.initHelper('datepicker');
        });
    </script>
    
@stop