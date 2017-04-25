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
    <style type="text/css">
        {{$Config->css}}
    </style>
    <link rel="stylesheet" href="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick-theme.min.css')}}">
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('app.partials.banner-item')
    <div class="content-boxed content">
        <div class="row">
            <div class="col-md-8 push-30 bg-white">
                <div class="content-mini content-mini-full border-b text-center overflow-hidden">
                    <ul class="list-icon-item h3 text-muted flex-between">
                        @foreach($item->features->where('type',$item->type)->take(6) as $feature)
                            <span class=" push-20-r">
                                <i class="{{$feature->icon}}"></i>
                                <div class="h5">{{$feature->feature}}</div>
                            </span>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white content content-narrow">
                    <div class="">
                        <div class="">
                            <h3 class="h3 text-capitalize push-15 ">
                                <i class=" text-primary  fa fa-file-text-o"></i>
                                @if($item->type == 0)
                                    @lang('general.details_resumen',['name'=> trans('general.packages')])
                                @elseif($item->type == 1)
                                    @lang('general.details_resumen',['name'=> trans('general.activities')])
                                @elseif($item->type == 2)
                                    @lang('general.details_resumen',['name'=> trans('general.hotels')])
                                @endif
                            </h3>
                            <p class="text-muted text-justify">{{$item->description}}</p>
                        </div>
                        <div class="row content-mini content-mini-full border-t">
                            <h4 class=" h5 col-sm-6">Duration:</h4>
                            <div class="text-muted col-sm-6">
                                <ul class="fa-ul ">
                                    <li class="text-capitalize">
                                        <i class="fa text-primary fa-clock-o fa-li"></i>{{$item->days}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if($item->include !== null)
                            <div class="row content-mini content-mini-full border-t">
                                <h4 class=" h5 col-sm-6">Price Include:</h4>
                                <div class="text-muted col-sm-6">
                                    <ul class="fa-ul">
                                        @foreach(explode(',', $item->include) as $option)
                                            <li class="text-capitalize">
                                                <i class="fa text-success  fa-check fa-li"></i>{{$option}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @if($item->suggestion !== null)
                            <div class="row content-mini content-mini-full border-t">
                                <h4 class=" h5 col-sm-6">Suggestions:</h4>
                                <div class="text-muted col-sm-6">
                                    <ul class="fa-ul">
                                        @foreach(explode(',', $item->suggestion) as $option)
                                            <li class="text-capitalize">
                                                <i class="fa text-success fa-check fa-li"></i>{{$option}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="push-30">
                        <h3 class="h3 text-capitalize push-15 "><i
                                    class=" text-primary fa fa-camera-retro"></i> @lang('photos')</h3>
                        @if(count($item->photos)>0)
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    @foreach($item->photos as $photo)
                                        <div>
                                            <img class="img-responsive border img-thumb" src="{{asset($photo->img)}}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="">
                                <div class="slider-nav">
                                    @foreach($item->photos as $photo)
                                        
                                        <img class="img-responsive border img-thumb" src="{{asset($photo->img)}}">
                                    
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    @if($item->type == 0)
                        <div class="">
                            <div>
                                <h3 class="h3 push-20 "><i class=" text-primary fa fa-bus"></i> Package Itinerary</h3>
                            </div>
                            {!! $item->itinerary !!}
                        </div>
                    @endif
                </div>
            
            </div>
            <div class="col-md-4 ">
                @include('app.partials.book')
                @include('app.partials.related_tours')
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{asset('js/plugins/slick/slick.min.js')}}"></script>
    <script src="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $('.js-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.js-slider',
            focusOnSelect: true,
        });
    </script>
@stop