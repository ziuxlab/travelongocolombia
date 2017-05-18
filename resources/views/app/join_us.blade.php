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
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.css' rel='stylesheet'/>
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
                <li><a class="" href="{{url(trans('general.home'))}}">@lang('general.home')</a></li>
                <li>{{$item->tittle}}</li>
            </ol>
        </div>
    </div>
    <div class="bg-white">
        <div class="content-boxed ">
           <div class="row">
               <div class="col-sm-12">
                    <div class="block">
                        <div class="block-content block-content-narrow block-content-full text-center">
                            @if (App::isLocale('en'))
                                <p>Would you like to work with us? Download the next form, fill in and upload it again, we will be in touch with you as soon as possible</p>
                                <p>Download the form: </p>
                                <a class="btn btn-primary btn-minw push-30" href="">form.co</a>
                                @else
                                <p>Te interesaría trabajar con nosotros?, descarga el siguiente formulario, diligéncialo y súbelo nuevamente, nos pondremos en contacto contigo a la menor brevedad posible.</p>
                                <p>Descargar formulario:</p>
                                <a class="btn btn-primary btn-minw push-30" href="">Formulario.doc</a>
                            @endif
                            <div class="row flex-center">
                                <div class=" col-sm-8 border content  col-sm-offset-2">
                                    {!! Form::open(['action'=> ['HomeController@join'],'class'=>'form-horizontal','files' => 'true']) !!}
                                    <div class="row">
                                        <div class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">
                                            {!! Form::label(trans('general.upload-form ').':', null, ['class' => 'text-right col-sm-4 control-label']) !!}
                                            {!! Form::file('form',['class'=>' btn btn-default']) !!}
                                            @if ($errors->has('img'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('img') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group text-center" >
                                            <button class="btn btn-primary btn-minw" type="submit">@lang('general.Submit')</button>
                                        </div>
                                    </div>

                                    {!! Form::close() !!}
                                </div>
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
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibWF1cm96aXV4IiwiYSI6ImNpdHhvenNtdDAxbXQyb21semM2bWxhN3EifQ.B_QI3wpQ_3fPslMMBn1erw';
        var map              = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v10',
            center: [-79.4512, 43.6568],
            zoom: 12
        });
        
        
        map.on('load', function () {
            map.addLayer({
                "id": "points",
                "type": "symbol",
                "source": {
                    "type": "geojson",
                    "data": {
                        "type": "FeatureCollection",
                        "features": [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": [-79.4512, 43.6568]
                            },
                            "properties": {
                                "title": "Travelongo",
                                "icon": "rocket"
                            }
                        }]
                    }
                },
                "layout": {
                    "icon-image": "{icon}-15",
                    "text-field": "{title}",
                    "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
                    "text-offset": [0, 0.6],
                    "text-anchor": "top"
                }
            });
        });
    
    
    
    </script>
   
@stop