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
    @if(count($products->where('local',App::getLocale())->where('type',0))>0)
        @include('app.partials.popular-tours')
    @endif
    @if(count($products->where('local',App::getLocale())->where('type',2))>0)
        @include('app.partials.popular-activities')
    @endif
    @if(count($products->where('local',App::getLocale())->where('type',4))>0)
        @include('app.partials.popular-services')
    @endif
@stop

@section('scripts')
@stop