@extends('layouts.app.app')

@section('title')
    {{$page->tittle}}
@stop

@section('keywords')
    {{$page->keywords}}
@stop

@section('description')
    {{$page->meta_description}}
@stop

@section('style')
    {{$Config->css}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('app.partials.banner')
    {!! $page->body !!}


@stop

@section('scripts')
@stop