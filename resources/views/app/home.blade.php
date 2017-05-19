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
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick-theme.min.css')}}">
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
    <script src="{{asset('js/plugins/slick/slick.min.js')}}"></script>
    <script>
        $(function(){
            App.initHelper('slick');
        });
    </script>
@stop