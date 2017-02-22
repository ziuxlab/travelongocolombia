<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.admin.head')
    
    @yield('styles')
    @yield('title')
    @yield('description')
    
    
    <title>{{ config('app.name', 'Laravel') }}</title>


</head>
<body>
<div id="page-container" class="enable-cookies">
    <!-- Header -->
    <!-- END  Header -->
    <!--  aqui se inlcuye el sidebar static xenon -->
    <!-- Main Container -->
    <main id="main-container">
        <div class="">
            <div class="col-sm-6 col-xs-12 bg-primary-darker div-full  a">
                <div class="push-50 center-block">
                    <div class="content "><img class="img-responsive" src="{{ asset('img/logo.svg') }}" alt=""></div>
                    <div class="text-white-op font-s18 text-center">
                        <h2 class="push-30">¿Necesitas Ayuda?</h2>
                        <p>Soporte: </p>
                        <p>Teléfono: <a href="tel:+573145535632">314-553-5632</a></p>
                        <p>Email: <a href="mailto:soporte@ziuxlab.com">Soporte<span>@</span>ziuxlab.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 bg-primary div-full">
                <div class="col-sm-10 col-xs-12 col-md-8 center-block text-gray-darker">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->
    
    <!-- Footer -->
    
    <!-- END Footer -->
</div>

@include('layouts.scripts')
@yield('scripts')


</body>
</html>