@extends('layouts.app.app')

@section('title')
    {{$page->tittle or $Config->tittle}}
@stop

@section('keywords')
    {{$page->keywords or $Config->keywords}}
@stop

@section('description')
    {{$page->meta_description or $Config->meta_description}}
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
    
    @foreach($page->components()->orderBy('order_component')->get() as $item)
        {!! $item->body !!}
    @endforeach
    

@stop

@section('scripts')
    {{$Config->scripts_footer}}
@stop