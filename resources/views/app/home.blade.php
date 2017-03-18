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
    @foreach($page->components()->orderBy('order_component')->get() as $item)
        {!! $item->body !!}
    @endforeach
    @include('app.partials.why-colombia')
    @include('app.partials.popular-tours')
    @include('app.partials.popular-activities')
@stop

@section('scripts')
@stop