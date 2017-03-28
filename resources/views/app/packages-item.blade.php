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
                    <ul class="list-icon-item text-muted flex-between">
                        <li class="  h2   ">
                            <i class="fa fa-wifi"></i>
                            <div class="h5">wifi</div>
                        </li>
                        <li class="h2   push-20-l">
                            <i class="fa fa-bullhorn"></i>
                            <div class="h5">traductor</div>
                        </li>
                        <li class="  h2   push-20-l">
                            <i class="fa h2 fa-support"></i>
                            <div class="h5">pool</div>
                        </li>
                        <li class="  h2   push-20-l">
                            <i class="fa fa-tv"></i>
                            <div class="h5">plasma tv</div>
                        </li>
                        <li class="   h2   push-20-l">
                            <i class="fa fa-coffee"></i>
                            <div class="h5">breakfast</div>
                        </li>
                    
                    </ul>
                
                
                </div>
                <div class="row">
                    @if(count($item->photos)>0)
                        <div class="col-xs-12 remove-padding">
                            <!-- Slider -->
                            <div class="js-slider">
                                @foreach($item->photos as $photo)
                                    <div>
                                        <img class="img-responsive" src="{{asset($photo->img)}}">
                                    </div>
                                @endforeach
                            </div>
                        
                        </div>
                        <div class="col-xs-12 remove-padding ">
                            <div class="slider-nav">
                                @foreach($item->photos as $photo)
                                    
                                    <img class="img-responsive border img-thumb" src="{{asset($photo->img)}}">
                                
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div>
                    <div class=" bg-white content content-narrow ">
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
                    <div class=" bg-white content content-narrow ">
                        <div class="">
                            <h3 class="h3 push-15 "><i class=" text-primary fa fa-bus"></i> Package Itinerary</h3>
                        
                        </div>
                    </div>
                
                
                
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