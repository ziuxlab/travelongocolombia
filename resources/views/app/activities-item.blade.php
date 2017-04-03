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
    <div class="content-boxed content content-full">
        <div class="row">
            <div class="col-md-8 bg-white">
                <div class="bg-white content content-narrow">
                    <div class=" push-20  ">
                        <div class="">
                            <h3 class="h3 push-15 "><i class=" text-primary fa fa-file-text-o"></i> Site Description
                            </h3>
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-body text-muted">
                                        <p class="text-muted ">{{$item->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row content-mini content-mini-full border-t">
                            <h4 class=" h5 col-sm-6">Duration</h4>
                            <div class="text-muted col-sm-6">{{$item->duration}}</div>
                        </div>
                        <div class="row content-mini content-mini-full border-t">
                            <h4 class=" h5 col-sm-6">Price Include</h4>
                            <div class="text-muted col-sm-6">
                                <ul class="fa-ul">
                                    <li><i class="fa text-success fa-check fa-li"></i>
                                        breakfast
                                    </li>
                                    <li><i class="fa text-success fa-check fa-li"></i>Lunch</li>
                                    <li><i class="fa text-success fa-check fa-li"></i>Dinner</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row content-mini content-mini-full border-t border-b">
                            <h4 class=" h5 col-sm-6">Price exclude</h4>
                            <div class="text-muted col-sm-6">
                                <ul class="fa-ul">
                                    <li><i class="fa text-danger fa-close fa-li"></i>Traductor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <h3 class="h3 push-20 "><i class=" text-primary fa fa-clock-o"></i> Schedule</h3>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-body text-muted">
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-angle-right fa-li"></i>8am-9:30am BREAKFAST AT ACCOMMODATION
                                        </li>
                                        <li><i class="fa fa-angle-right fa-li"></i>9:30am-12pm TOUR THE COFFE PARK</li>
                                        <li><i class="fa fa-angle-right fa-li"></i>12pm-1:30pm
                                            LUNCH IN THE RESTAURANT
                                        </li>
                                        <li><i class="fa fa-angle-right fa-li"></i>1:30pm-7pm
                                            CAFE TRIP AND ATTRACTIONS
                                        </li>
                                        <li><i class="fa fa-angle-right fa-li"></i>7pm-8pm PICK UP FOR DINNER</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white content content-full content-narrow">
                    <div>
                        <h3 class="h3 push-20 "><i class=" text-primary fa fa-key"></i> Key words</h3>
                    </div>
                    <div class="content-mini content-mini-full border text-center overflow-hidden">
                        <ul class="list-icon-item h3 text-muted flex-between">
                            <li class="push-20-l">
                                <i class="fa fa-bullhorn"></i>
                                <div class="h5">traductor</div>
                            </li>
                            <li class="push-20-l">
                                <i class="fa fa-leaf"></i>
                                <div class="h5">nature</div>
                            </li>
                            <li class="push-20-l">
                                <i class="fa fa-coffee"></i>
                                <div class="h5">coffe</div>
                            </li>
                            <li class="push-20-l">
                                <i class="fa fa-book"></i>
                                <div class="h5">history</div>
                            </li>
                            <li class="push-20-l">
                                <i class="fa fa-smile-o"></i>
                                <div class="h5">attractions</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white content content-full content-narrow">
                    <h3 class="h3 push-15 "><i class=" text-primary fa fa-camera-retro"></i> Photos</h3>
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
            </div>
            <div class="col-md-4 ">
                @include('app.partials.book')
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