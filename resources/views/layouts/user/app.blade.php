<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

    @include('layouts.user.head')
    @yield('description')
    @yield('meta')
    @yield('style')

</head>
<body>
<div id="page-container" class="enable-cookies sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Header -->

    <!-- END Header -->
    <!--  aqui se inlcuye el sidebar static xenon -->
    @include('layouts.user.sidebar')
            <!-- fin del sidebar -->
    @include('layouts.user.cabecera')
            <!-- Main Container -->
    <main id="main-container">
        @yield('contenido')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->

    <!-- END Footer -->
</div>

@include('layouts.scripts')
</body>
</html>




