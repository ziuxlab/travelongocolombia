@php $active = 'dashboard' @endphp

@extends('layouts.user.app')

@section('title')
@lang('dashboard_user.account')
@stop

@section('description')
@stop

@section('meta')
@stop

@section('style')
@stop

@section('contenido')
@include('layouts.user.breadcrumb',['parent'=>trans('dashboard_user.account'),'child'=>trans('dashboard_user.dashboard')])
        <!-- user profile -->
<div class="content overflow-hidden">
    <div class="col-sm-8">
        <div class="panel panel-default pl">
            <!-- panel tittle -->
            <div class="headpl">
                <h4 class="titlepl">@lang('dashboard_user.profile')</h4>
            </div>
            <!-- end panel tittle -->
            <!-- panel content -->
            <div class="panel-body plby">
                <!-- user profile -->
                <div class="row col-sm-offset-1 rwby">
                    <!-- user image -->
                    <div class="col-md-4">
                        <img alt="User Pic" src="@if(Auth::user()->img !=null) {{asset(Auth::user()->img)}} @else {{asset('img/default.png')}} @endif"
                             class="img-circle img-responsive center-block imgbg">
                    </div>
                    <!-- end user image -->
                    <!-- user info -->
                    <div class="col-md-8">
                        {!! Form::open() !!}
                        <div class="row rwsp">
                            <label class="col-sm-4 control-label">@lang('dashboard_user.name'):</label>
                            <div class="col-sm-8">{{Auth::user()->name}}</div>
                        </div>
                        <div class="row rwsp">
                            <label class="col-sm-4 control-label">@lang('dashboard_user.email'):</label>
                            <div class="col-sm-8">{{Auth::user()->email}}</div>
                        </div>
                        <div class="row rwsp">
                            <label class="col-sm-4 control-label">@lang('dashboard_user.last_connection'):</label>
                            <div class="col-sm-8">11/01/2017 22:08</div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- end user info -->
                </div>
                <!-- end user profile -->
            </div>
            <!-- end panel content -->
        </div>
    </div>
</div>
<!-- end user profile -->
@stop

@section('scripts')
@stop