
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.app.head')
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
⁠⁠⁠<style>
    body {
        background: url('img/avion-atardecer.jpeg') ;
        background-size: cover;
        height: 100vh;
       
    }
    .center-b { align-items: center; text-align: center; }
    
   
   
    .text-big{
        font-size: 48px;
    }
    @media screen and (max-width:568px){
        .text-big {
            font-size: 30px !important;
            margin-top:100px;
        }
    }
</style>

</head>
<body>


<div class="col-xs-12 bg-grey-op remove-padding center-b div-full">
    <div class="container content-full    ">
        <div class="text-center">
            <img  src="{{url('img/logo-naranja.png')}}" alt="logo" class="img-responsive animated bounceInLeft">
        </div>
        <h2 class=" text-white push-30 font-w600 text-big animated fadeInUp pull-">
            Coming Soon!
        </h2>
        <h3 class=" text-white push-20 font-w600 h2 animated fadeInUp">
            ‘‘Everything you need”
        </h3>
        <h4 class="col-sm-6 text-white font-w400 col-sm-offset-3 animated fadeInUp">
            Enjoy the wonderful experience of discovering a whole new culture in English.
            Quick, simple, unforgettable’’
        </h4>
    </div>
</div>

</body>