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
    {{$Config->css}}
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick-theme.min.css')}}">
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('app.partials.banner')
    <div class="content-boxed">
        <div class="content-mini content-mini-full bg-transparent">
            <ol class="breadcrumb">
                <li class="h6"><a class="" href="{{url(trans('general.home'))}}">@lang('general.home')</a></li>
                <li class="h6">{{$item->tittle}}</li>
            </ol>
        </div>
    </div>
    <div class="bg-white">
        <div class="content-boxed ">
            <div class="content">
                <h2 class="h2 push-30 text-center">Restaurants</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">Dar papaya</h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya-4.jpg')}}">
                                    </div>
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya.jpg')}}">
                                    </div>
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya-2.jpg')}}">
                                    </div>
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya-3.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">tipo de comida:</div>
                                <p class="text-justify">Latina, De Amèrica del Sur, Armenia, Fusión, Apto para
                                                        vegetarianos.</p>
                                <div class="h5 text-capitalize">Caracteristícas:</div>
                                <p class="text-justify">Estacionamiento disponible, Estacionamiento para clientes,
                                                        Estacionamiento
                                                        privado gratis, Sillitas altas disponibles, Acceso para silla de
                                                        ruedas,
                                                        Sirve alcohol, Bar completo, Vino y cerveza, Acepta American
                                                        Express, Acepta
                                                        Mastercard, Acepta Visa, Solo pago en efectivo, Comida para
                                                        llevar,
                                                        Reservaciones, Asientos al aire libre, Asiento, Meseros, Wi-Fi
                                                        gratis.</p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">La Fogata</h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/fogata-1.jpg')}}">
                                    </div>
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/fogata-2.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">tipo de comida:</div>
                                <p class="text-justify">Churrasquería, Latina, Parrillada.</p>
                                <div class="h5 text-capitalize">Caracteristícas:</div>
                                <p class="text-justify">Comida para llevar, Asientos al aire libre, Asiento, Meseros,
                                                        Estacionamiento disponible, Estacionamiento en la calle,
                                                        Estacionamiento para clientes, Televisión, Sillitas altas
                                                        disponibles, Acceso para silla de ruedas, Sirve alcohol, Bar
                                                        completo, Vino y cerveza, Acepta American Express, Acepta
                                                        Mastercard, Acepta Visa, Solo pago en efectivo, Wi-Fi gratis,
                                                        Reservaciones.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <h2 class="h2 push-30 text-center">Inland Transport</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">Taxi</h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/taxi.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">tipo de vehiculos:</div>
                                <p class="text-justify">camionetas, carros 4 puertas, vehiculo familiar.</p>
                    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">Uber</h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img class="img-responsive "
                                             src="{{asset('img/restaurants/uber.jpg')}}">
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">tipo de vehiculos:</div>
                                <p class="text-justify">vehiculos de alta gama con aire acondicionado.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
            arrows: true,
            fade: true,
        });
    </script>
@stop