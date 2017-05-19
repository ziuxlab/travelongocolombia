@extends('layouts.app.app')

@section('title')
    {{$item->tittle or $Config->tittle}}
@stop

@section('keywords')
    {{$item->keywords or $Config->keywords}}
@stop

@section('description')
    {{$item->meta_description or $Config->meta_description}}
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
    @include('app.partials.banner')
    <div class="content-boxed">
        <div class="content-mini content-mini-full bg-transparent">
            <ol class="breadcrumb">
                <li class="h6"><a class="" href="{{url('/')}}">home</a></li>
            
                <li class="h6">{{$item->tittle}}</li>
            </ol>
        </div>
    </div>
    {!! $item->body !!}
@stop

@section('scripts')
    {{$Config->scripts_footer}}
@stop