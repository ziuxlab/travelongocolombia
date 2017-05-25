<!DOCTYPE html>
<html lang="{{ session('locale') ?: config('app.locale') }}">
<head>
    @include('layouts.app.head')

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGVWXS8"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
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
    <main id="main-container">
        <div id="page-loader"></div>
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
