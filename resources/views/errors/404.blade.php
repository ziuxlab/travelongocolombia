@extends('layouts.app.app')

@section('title')
@stop

@section('description')
@stop

@section('style')
@stop

@section('breadcrumb')
@stop

@section('contenido')
    <div class="img-container banner">
        <img class="img-responsive img-fixed-xs" src="{{asset('img/banner/banner4.jpg')}}" alt="">
        <div class="baner-overlay">
            <div class="img-options-content">
                <div class="col-sm-12">
                    <h1 class="h1 font-s96 font-w700 text-danger push-20 push-100-t animated fadeInDown"
                        data-class="animated fadeInDown">
                        "Error 404"
                    </h1>
                    <h2 class="h4 text-white-op animated fadeIn">
                        We are sorry but the page you are looking for was not found..
                    </h2>
                    <div class="push-50-t push-20 text-center">
                        <a class="btn btn-danger btn-minw150  text-white animated fadeInLeft" href="{{url('/')}}">
                            Go to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop