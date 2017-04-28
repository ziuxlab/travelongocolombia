@php $active = 'booking-history'; @endphp

@extends('layouts.user.app')

@section('title')
@lang('dashboard_user.bookings')
@stop

@section('description')
@stop

@section('meta')
@stop

@section('style')
<link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
@stop


@section('contenido')
@include('layouts.user.breadcrumb',['parent'=>trans('dashboard_user.bookings'),'child'=>trans('dashboard_user.my_bookings')])
<!-- booking history -->
<div class="content overflow-hidden">
    <div class="col-sm-12">
        <div class="panel panel-default pl">
            <!-- panel tittle -->
            <div class="headpl">
                <h4 class="titlepl">@lang('dashboard_user.booking_history')</h4>
            </div>
            <!-- end panel tittle -->
            <!-- panel content -->
            <div class="panel-body plby">
                <div class="col-sm-10 col-sm-offset-1">
                    <!-- list bookings -->
                    <div id="content"></div>
                    <!-- end list bookings -->
                </div>
            </div>
            <!-- end panel content -->
        </div>
    </div>
</div>
<!-- booking history -->
@stop

@section('scripts')
@include('layouts.user.partials._list', ['type'=> 'bookings'])
@stop