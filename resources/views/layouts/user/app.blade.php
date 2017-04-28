<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.app.head')

    <link href="{{ url('user/css/sidebar.css') }}" rel="stylesheet">

    @yield('description')
    @yield('meta')
    @yield('style')

</head>
<body>
    <div id="page-container" class="sidebar-l">
     <!-- Header -->
     <header id="header-navbar" class="">
        @include('layouts.app.cabecera')
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id="main-container">
        <div class="col-md-3 side-r">@include('layouts.user.sidebar')</div>
        <div class="col-md-9 side-l">@yield('contenido')</div>
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-secondary">
        @include('layouts.app.footer')
    </footer>
    <!-- END Footer -->
</div>

@include('layouts.scripts')
</body>
</html>




