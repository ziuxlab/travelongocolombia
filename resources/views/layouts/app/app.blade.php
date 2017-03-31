<!DOCTYPE html>
<html lang="{{ session('locale') ?: config('app.locale') }}">
<head>
    @include('layouts.app.head')
    
</head>
<body>
<div id="page-container" class="sidebar-l  ">
    
    <aside id="side-overlay">
        @include('layouts.app.sidebar')
    </aside>
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
@stack('scripts')
</body>
</html>
