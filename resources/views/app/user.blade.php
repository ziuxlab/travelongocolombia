
@extends('layouts.app.app')

@section('title')
    @lang('dashboard_user.account')
@stop

@section('keywords')
    {{$Config->keywords}}
@stop

@section('description')
    {{$Config->meta_description}}
@stop

@section('style')
    {{$Config->css}}
    <link rel="stylesheet" href="{{asset('user/css/image_preview.css')}}">
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
                <i class="fa fa-shopping-cart"></i> @lang('dashboard_user.account')
            </h1>
        </div>
    </div>
    <div class="content-boxed">
        <div class="content-mini content-mini-full bg-transparent">
            <ol class="breadcrumb">
                <li><a class="" href="{{url(trans('general.home'))}}">@lang('general.home')</a></li>
                <li>@lang('dashboard_user.account')</li>
            </ol>
        </div>
    </div>
    <div class="bg-white">
        <div class="content-boxed content content-full">
            <div class="row">
                <!-- sider -->
                <div class="col-md-3 push ">
                    @include('app.user.sidebar')
                </div>
                <div class="col-md-9">
                    @include($vista)
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{ asset('user/js/jquery.uploadPreview.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.uploadPreview({
                input_field: "#image-upload",
                preview_box: "#image-preview",
                label_field: "#image-label"
            });
        });
    </script>
@stop