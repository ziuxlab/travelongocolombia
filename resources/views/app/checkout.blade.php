@extends('layouts.app.app')

@section('title')
    {{ $Config->tittle}}
@stop

@section('keywords')
    {{ $Config->keywords}}
@stop

@section('description')
    {{$Config->meta_description}}
@stop

@section('style')
    {{$Config->css}}
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    <div class="bg-image  overflow-hidden" style="background-image: url('{{ asset('img/banner/about-us.jpg')}}');">
        <div class="content content-full bg-black-op">
            <h1 class="h1 font-w700 text-center text-white push-50 push-50-t animated fadeInDown"
                data-class="animated fadeInDown">
                <i class="fa fa-shopping-cart"></i> Checkout
            </h1>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
@stop