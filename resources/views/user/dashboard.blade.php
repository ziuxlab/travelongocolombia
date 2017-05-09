
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
                    @include('layouts.user.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="block block-bordered block-rounded">
                        <div class="block-header">
                            <h3 class="block-title">@lang('dashboard_user.profile')</h3>
                        </div>
                        <div class="block-content  block-content-full">
                            <div class="row flex-center">
                                <!-- user image -->
                                <div class="col-sm-2 col-xs-4">
                                    <img alt="User Pic"
                                         src="@if(Auth::user()->img !=null) {{asset(Auth::user()->img)}} @else {{asset('img/default.png')}} @endif"
                                         class="img-responsive">
                                </div>
                                <!-- end user image -->
                                <!-- user info -->
                                <div class="col-sm-10 col-xs-8">
                                    {!! Form::open() !!}
                                    <div class="row">
                                        <label class="col-xs-4 control-label">@lang('dashboard_user.name')
                                            :</label>
                                        <div class="col-xs-8">{{Auth::user()->name}}</div>
                                    </div>
                                    <div class="row">
                                        <label class="col-xs-4 control-label">@lang('dashboard_user.email')
                                            :</label>
                                        <div class="col-xs-8">{{Auth::user()->email}}</div>
                                    </div>
                                    <div class="row">
                                        <label class="col-xs-4 control-label">@lang('dashboard_user.last_connection')
                                            :</label>
                                        <div class="col-xs-8">11/01/2017 22:08</div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                <!-- end user info -->
                            </div>
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        
        </div>
    </div>
@stop

@section('scripts')
@stop