<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    
    @include('layouts.app.head')
    
    @yield('title')
    @yield('description')
    @yield('meta')
    @yield('style')

</head>
<body>
<div id="page-container" class="">
    <!-- Header -->
    <header id="header-navbar" class="">
        @include('layouts.app.cabecera')
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id="main-container" >
        @yield('contenido')
    </main>
    <!-- END Main Container -->
    
    <!-- Footer -->
    <footer id="page-footer" class="bg-secondary">
        @include('layouts.app.footer')
    </footer>
    <!-- END Footer -->

</div>


<!-- Scripts -->
@include('layouts.scripts')
</body>
</html>
