@extends('layouts.app.app')

@section('title')
Home
@stop

@section('description')
@stop

@section('style')
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @foreach($item->components()->orderBy('order_component')->get() as $component)
        {!! $component->body !!}
    @endforeach
    @include('app.partials.popular-tours')
    @include('app.partials.popular-activities')
@stop

@section('scripts')
@stop