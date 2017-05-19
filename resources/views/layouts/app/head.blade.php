<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="author" content="Ziuxlab">
<meta name="robots" content="index, follow">
<meta name="keywords" content="@yield('keywords')">
<link rel="canonical" href="{{url()->current()}}">
<title>@yield('title') | Travelongo</title>
<meta name="description" content="@yield('description')">
<!-- Real Favicon Generator -->

<link rel="apple-touch-icon" sizes="120x120" href="{{url('favicons/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" href="{{url('favicons/favicon-32x32.png')}}" sizes="32x32">
<link rel="icon" type="image/png" href="{{url('favicons/favicon-16x16.png')}}" sizes="16x16">
<link rel="manifest" href="{{url('favicons/manifest.json')}}">
<link rel="mask-icon" href="{{url('favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
<meta name="theme-color" content="#ffffff">


<!-- precarga de url que se van a utilizar despues -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.gstatic.com">

<!-- carga de css mientras entra a produccion, eliminar despues -->
<link href="{{ asset(mix('/css/app-home.css')) }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.min.css')}}">
<link href="https://file.myfontastic.com/yCCPuyfvUjUbet8RsGQ43W/icons.css" rel="stylesheet">

@yield('style')

<!-- CSS Print -->
<link rel="stylesheet" type="text/css" media="print" href="{{ asset(mix('/css/app-home.css')) }}">


<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    
    @yield('scripts_header')
</script>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>-->
