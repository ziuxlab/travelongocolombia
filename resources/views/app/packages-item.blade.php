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
                <div class="col-xs-12 content content-full text-center">
                    <ul class="list-icon-item flex-between">
                        <li class=" text-gray h2   ">
                            <i class="fa fa-wifi"></i>
                            <div class="h5">wifi</div>
                        </li>
                        <li class=" text-gray  h2   push-20-l">
                            <i class="fa fa-bullhorn"></i>
                            <div class="h5">traductor</div>
                        </li>
                        <li class=" text-gray h2   push-20-l">
                            <i class="fa h2 fa-support"></i>
                            <div class="h5">pool</div>
                        </li>
                        <li class=" text-gray h2   push-20-l">
                            <i class="fa fa-tv"></i>
                            <div class="h5">plasma tv</div>
                        </li>
                        <li class=" text-gray  h2   push-20-l">
                            <i class="fa fa-coffee"></i>
                            <div class="h5">breakfast</div>
                        </li>
                    
                    </ul>
                
                
                </div>
                <div class="row">
                    <div class="col-xs-12 remove-padding">
                        <!-- Slider -->
                        <div class="js-slider">
                            @foreach($item->photos->sortBy('order') as $photo)
                                <div>
                                    <img src="{{asset($photo->img)}}">
                                </div>
                            @endforeach
                        </div>
                    
                    </div>
                    <div class="col-xs-12 remove-padding">
                        <div class="slider-nav">
                            @foreach($item->photos->sortBy('order') as $photo)
                                <div>
                                    <img height="150" class="img-thumb" src="{{asset($photo->img)}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class=" bg-white padding-20 div-bordered push-15-t">
                    <p class="col-md-2">
                        <b>Description</b>
                    </p>
                    <p class="col-md-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    
                    </p>
                </div>
                <div class=" bg-white padding-20 div-bordered push-15-t ">
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="col-xs-12 padding-20 bg-white div-bordered">
                    <div class="block">
                        <div class="block-header bg-primary center-b h3 text-white">
                            - Booking -
                        </div>
                        <div class="block-content block-content-full col-xs-12">
                            <div class="col-xs-12 remove-padding push-15-t">
                                <div class="col-md-6 form-group">
                                    <div class="h6">Check-in date</div>
                                    <div class="js-datetimepicker input-group date push-10-t">
                                        <input class="form-control" type="text" name=" "
                                               placeholder="Choose a date..">
                                        <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="h6">Check-in date</div>
                                    <div class="js-datetimepicker input-group date push-10-t">
                                        <input class="form-control" type="text" name=" "
                                               placeholder="Choose a date..">
                                        <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 remove-padding push-30-t center-b">
                                <div class="col-md-4 form-group">
                                    <div class="h6">Adults</div>
                                    <input class="form-control col-xs-12" type="number">
                                </div>
                                <div class="col-md-4 form-group">
                                    <div class="h6">Infants</div>
                                    <input class="form-control col-xs-12" type="number">
                                </div>
                                <div class="col-md-4 form-group">
                                    <div class="h6">Children</div>
                                    <input class="form-control col-xs-12" type="number">
                                </div>
                                <p class="h4 col-xs-6 remove-padding push-30-t">
                                    TOTAL COST
                                </p>
                                <p class="h4 col-xs-6 remove-padding push-30-t">
                                    $1.400
                                </p>
                                <button class="btn btn-lg btn-primary push-10">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
                @include('app.partials.needhelp')
            </div>
        </div>
    </div>


@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{asset('js/plugins/slick/slick.min.js')}}"></script>
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