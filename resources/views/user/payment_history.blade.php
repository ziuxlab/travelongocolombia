@php $active = 'payments'; @endphp

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
    @include('layouts.user.breadcrumb',['parent'=>trans('dashboard_user.bookings'),'child'=>trans('dashboard_user.my_payments')])
<!-- payment history -->
<div class="content overflow-hidden">
    <div class="col-sm-8">
        <div class="panel panel-default pl">
            <!-- panel tittle -->
            <div class="headpl">
                <h4 class="titlepl">@lang('dashboard_user.payment_history')</h4>
            </div>
            <!-- end panel tittle -->
            <!-- panel content -->
            <div class="panel-body plby">
                <div class="col-sm-10 col-sm-offset-1">
                 <!-- list payments -->
                   <div class="table-responsive">
                       <table class="table table-bordered">
                        <thead>
                            <th class="thtb">@lang('dashboard_user.date')</th>
                            <th class="thtb">@lang('dashboard_user.status')</th>
                            <th class="thtb">@lang('dashboard_user.value')</th>
                            <th class="thtb thactions">@lang('dashboard_user.actions')</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>11/11/2017 22:00</td>
                            <td>accept</td>
                            <td>250</td>
                            <td>
                             <button class="js-swal-confirm btn btn-xs btn btn-orange" type="button">@lang('dashboard_user.view_details')
                         </button>
                     </td>
                 </tr>
                 <tr>
                    <td>01/12/2016 20:00</td>
                    <td>decline</td>
                    <td>50</td>
                    <td>
                     <button class="js-swal-confirm btn btn-xs btn btn-orange" type="button">@lang('dashboard_user.view_details')
                 </button>
             </td>
         </tr>
     </tbody>
           </table>
       </div>
        <!-- end list payments -->
   </div>
</div>
<!-- end panel content -->
</div>
</div>
</div>
<!-- payment history -->
@stop

@section('scripts')
@include('layouts.user.partials._sweetalert', ['type'=>'payment'])
@stop