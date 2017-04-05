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
    <div class="bg-white">
        <div class="row content-boxed ">
            <div class="col-md-8 col-md-offset-2 col-sm-12 ">
                <div class="content content-narrow content-full text-center">
                    <h1 class="h1 push-20-t push-20">Declinade¡</h1>
                    <p class="">{{$error['message']}} Please try again or contact us.</p>
                    <div class="push-30">
                         <span class="font-s48 font-w600"><i class="si fa-5x si-close text-danger"></i></span>
                    </div>
                    
                    <div class="push-20">
                        <a class="btn btn-primary btn-minw" href="{{url('checkout')}}">Try Again</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
@stop