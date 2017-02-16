<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.admin.head')
    @yield('title')
    @yield('description')
    @yield('meta')
    @yield('styles')
</head>
<body>
<div id="page-container" class="enable-cookies sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Header -->
    
    <!-- END Header -->
    <!--  aqui se inlcuye el sidebar static xenon -->
@include('layouts.admin.sidebar')
<!-- fin del sidebar -->
@include('layouts.admin.cabecera')

<!-- Main Container -->
    <main id="main-container">
        @yield('contenido')
    </main>
    <!-- END Main Container -->
    
    <!-- Footer -->
    
    <!-- END Footer -->
</div>
@include('layouts.scripts')
@yield('scripts')
</body>
</html>




