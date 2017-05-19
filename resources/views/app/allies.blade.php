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
                                <h3 class="block-title">Camino Real Parrilla Bar</h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img alt="travelongo allies"  class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya-4.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies"  class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies"  class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya-2.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies"  class="img-responsive "
                                             src="{{asset('img/restaurants/darpapaya-3.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">@lang('general.details'):</div>
                                <p class="text-justify"> Allí podrás deleitar tu paladar con los deliciosos sabores que te ofrece el salmón oriental, la cazuela de mariscos, langostinos al ajillo, las carnes a la parrilla, y las truchas en sus diferentes presentaciones, platos vegetarianos, y los típicos patacones para acompañar.</p>
                                <div class="h5 text-capitalize">@lang('general.address'):</div>
                                <p class="text-justify">Carrera 6 # 1-35 Salento, Quindío.</p>
                                <div class="h5 text-capitalize">@lang('dashboard_user.price'):</div>
                                <p class="text-justify">comidas oscilan entre los $4.000 pesos hasta los $50.000 pesos. Las bebidas no alcohólicas tienen precios entre $2.000 pesos y $9.000 pesos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="block block-rounded block-bordered">
                            <div class="block-header ">
                                <h3 class="block-title">Helena adentro
                                </h3>
                            </div>
                            <div class="">
                                <!-- Slider -->
                                <div class="js-slider">
                                    <div>
                                        <img alt="travelongo allies"  class="img-responsive "
                                             src="{{asset('img/restaurants/fogata-1.jpg')}}">
                                    </div>
                                    <div>
                                        <img alt="travelongo allies"  class="img-responsive "
                                             src="{{asset('img/restaurants/fogata-2.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="h5 text-capitalize">@lang('general.details'):</div>
                                <p class="text-justify">Aquí disfrutaras de la esencia de la comida Colombiana, deleitandote con alimentos 100% naturales.</p>
                                <div class="h5 text-capitalize">@lang('general.address'):</div>
                                <p class="text-justify">Cra. 7 #8-1, Filandia, Quindío, Colombia.</p>
                                <div class="h5 text-capitalize">@lang('dashboard_user.price'):</div>
                                <p class="text-justify">paquete 1. Almuerzo o cena compartiendo lo mejor de Helena $47.500
                                    <br>  Paquete 2. Tarde de café y postre $12.000.</p>
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
                                        <img alt="travelongo allies" class="img-responsive "
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
                                        <img alt="travelongo allies"  class="img-responsive "
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