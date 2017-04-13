@php $active = 'change-password' @endphp

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
@include('layouts.user.breadcrumb',['parent'=>trans('dashboard_user.account'),'child'=>trans('dashboard_user.change_password')])
        <!-- user password -->
<div class="content overflow-hidden">
    <div class="col-sm-8">
        <div class="panel panel-default pl">
            <!-- panel tittle -->
            <div class="headpl">
                <h4 class="titlepl">@lang('dashboard_user.password')</h4>
            </div>
            <!-- end panel tittle -->
            <!-- panel content -->
            <div class="panel-body plby">
                <!-- form -->
                {!! Form::open([ 'method' => 'POST', 'action'=> ['DashboardController@storePassword'], 'class' => 'form-horizontal col-md-offset-2']) !!}
                {!! csrf_field() !!}
                <div class="form-group {{ $errors->has('current') ? ' has-error' : '' }}">
                    {!! Form::label(trans('dashboard_user.current_password').':', null, ['class' => 'lbpd col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="current">
                        {!! $errors->first('current','<span class="help-block">:message</span>') !!}
                    </div>

                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::label(trans('dashboard_user.new_password').':', null, ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password">
                        {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    {!! Form::label(trans('dashboard_user.repeat_password').':', null, ['class' => 'lbpd col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password_confirmation">
                        {!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-orange" type="submit">@lang('dashboard_user.change_password')</button>
                    </div>
                </div>
                {!! Form::close() !!}
                        <!-- form -->
            </div>
            <!-- end panel content -->
        </div>
    </div>
</div>
<!-- end user passwor -->
{!! Form::close() !!}
        <!-- end form -->
</div>
</div>
</div>
<!-- end user password -->
@stop

@section('scripts')
@stop