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
                        @foreach($item->features->where('type',$item->type) as $feature)
                            <span class=" push-20-r">
                                <i class="{{$feature->icon}}"></i>
                                <div class="h5">{{$feature->feature}}</div>
                            </span>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white content content-narrow">
                    <div class=" push-20  ">
                        <div class="">
                            <h3 class="h3 push-15 "><i class=" text-primary fa fa-file-text-o"></i> Package Details</h3>
                            <p class="text-muted">Maecenas sed diam eget risus varius blandit sit amet non magna. Cras
                                                  mattis consectetur
                                                  purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi
                                                  erat porttitor
                                                  ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta
                                                  gravida at eget metus.
                                                  Donec id elit non mi porta gravida at eget metus.
                            
                                                  Aenean lacinia bibendum nulla sed consectetur. Maecenas faucibus
                                                  mollis interdum. Cras
                                                  mattis consectetur purus sit amet fermentum. Curabitur blandit tempus
                                                  porttitor. Nulla
                                                  vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue
                                                  laoreet rutrum.</p>
                        </div>
                        <div class="row content-mini content-mini-full border-t">
                            <h4 class=" h5 col-sm-6">Duration</h4>
                            <div class="text-muted col-sm-6">9 Days</div>
                        </div>
                        <div class="row content-mini content-mini-full border-t">
                            <h4 class=" h5 col-sm-6">Price Include</h4>
                            <div class="text-muted col-sm-6">
                                <ul class="fa-ul">
                                    <li><i class="fa text-success fa-check fa-li"></i>First item</li>
                                    <li><i class="fa text-success fa-check fa-li"></i>Second item</li>
                                    <li><i class="fa text-success fa-check fa-li"></i>Sublist</li>
                                    <li><i class="fa text-success fa-check fa-li"></i>Third item</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row content-mini content-mini-full border-t border-b">
                            <h4 class=" h5 col-sm-6">Price exclude</h4>
                            <div class="text-muted col-sm-6">
                                <ul class="fa-ul">
                                    <li><i class="fa text-danger fa-close fa-li"></i>First item</li>
                                    <li><i class="fa text-danger fa-close fa-li"></i>Second item</li>
                                    <li><i class="fa text-danger fa-close fa-li"></i>Sublist</li>
                                    <li><i class="fa  text-danger fa-close fa-li"></i>Third item</li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                    <div class="   ">
                        <div>
                            <h3 class="h3 push-20 "><i class=" text-primary fa fa-bus"></i> Package Itinerary</h3>
                        </div>
                        
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title ">
                                        <span class="text-primary">Day 1</span> Arrive in Zürich, Switzerland
                                    </h3>
                                </div>
                                <div class="panel-body text-muted">
                                    <p>welcome at the airport with fresh juice and cookies
                                       transportation to accommodations
                                       check into accommodations and rest for the night
                                       dinner/drinks at accommodation 7pm
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="text-primary">Day 1</span> Arrive in Zürich, Switzerland
                                    </h3>
                                </div>
                                <div class="panel-body text-muted">
                                    <ul class="fa-ul">
                                        <li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
                                        <li><i class="fa fa-clock-o fa-li"></i>9am TOUR OF ARMENIA, MERCAR</li>
                                        <li><i class="fa fa-clock-o fa-li"></i>1pm CAFÉ QUINDIO</li>
                                        <li><i class="fa fa-clock-o fa-li"></i>3pm TOP OF MOCAWA</li>
                                        <li><i class="fa fa-clock-o fa-li"></i>7pm PICK UP FOR DINNER AT GERANIOS</li>
                                    </ul>
                                
                                </div>
                            </div>
                        </div>
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
    
    
    
    </script>
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