@extends('layouts.app.app')

@section('title')
    Success Payment
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
    <div class="bg-white">
        <div class="row content-boxed ">
            <div class="col-md-8 col-md-offset-2 col-sm-12 ">
                <div class="content content-narrow content-full text-center">
                    <h1 class="h1 push-20-t push-20">Success¡</h1>
                    <p class="">You just paid <span class="text-success">${{number_format($booking->price)}}</span><br>
                                Your Payment reference: {{$booking->id}} <br>
                    Check you email for the itinerary</p>
                    <div class="push-30">
                         <span class="font-s48 font-w600"><i class="si fa-5x si-check text-success"></i></span>
                    </div>
                    <div class="push-20">
                        <a class="btn btn-primary btn-minw" href="{{url('/')}}">Done</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
@stop