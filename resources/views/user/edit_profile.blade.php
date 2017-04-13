@php $active = 'edit-profile' @endphp

@extends('layouts.user.app')

@section('title')
@lang('dashboard_user.account')
@stop

@section('description')
@stop

@section('meta')
@stop

@section('style')
    <link rel="stylesheet" href="{{asset('user/css/image_preview.css')}}">
    @stop

    @section('contenido')
    @include('layouts.user.breadcrumb',['parent'=>trans('dashboard_user.account'),'child'=>trans('dashboard_user.edit_profile')])
            <!-- user info -->
    <div class="content overflow-hidden">
        <div class="col-sm-8">
            <div class="panel panel-default pl">
                <!-- panel tittle -->
                <div class="headpl">
                    <h4 class="titlepl">@lang('dashboard_user.profile_info')</h4>
                </div>
                <!-- end panel tittle -->
                <!-- panel content -->
                <div class="panel-body plby">
                    <!-- form -->
                    {!! Form::open(['method' => 'POST', 'action'=> ['DashboardController@updateProfile'],'files' => 'true', 'class' => 'form-horizontal col-md-offset-2']) !!}
                            <!-- user image -->
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3 ">
                            <div id="image-preview"
                                 style="background-image: @if(Auth::user()->img !=null) url({{asset(Auth::user()->img)}}) @else url({{asset('img/default.png')}}) @endif">
                                <label for="image-upload" id="image-label">@lang('dashboard_user.choose')</label>
                                <input type="file" name="image" id="image-upload"
                                       accept="image/png,image/jpeg,image/jpg"/>
                            </div>
                            {!! $errors->first('image','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <!-- end user image -->
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label(trans('dashboard_user.name').':', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}
                            {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label(trans('dashboard_user.email').':', null, ['class' => 'col-sm-3 control-label lbpd ']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('email', Auth::user()->email, ['class' => 'form-control']) !!}
                            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button class="btn btn-orange" type="submit">@lang('dashboard_user.update_info')</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                            <!-- form -->
                </div>
                <!-- end panel content -->
            </div>
        </div>
    </div>
    <!-- end user info -->
@stop

@section('scripts')
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