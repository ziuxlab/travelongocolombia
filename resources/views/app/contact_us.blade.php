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
            <div class="">
                <div class=" flex remove-padding">
                    <div class="col-sm-6 remove-padding">
                        <div id='map' style='position: absolute; top: 0; bottom: 0;width: 100%;'></div>
                    </div>
                    <div class="col-sm-6 remove-padding">
                        <div class="block">
                            <div class="">
                                <div class="row content content-narrow">
                                    <h3 class="push-15">Contact US</h3>
                                    <div class="col-sm-6">
                                        <h4>Adress:</h4>
                                        <i class="si si-pointer"></i> {{$Config->address}}
                                    </div>
                                    <div class="col-sm-6">
                                        <h4>Phone:</h4>
                                        <i class="fa fa-phone"></i> {{$Config->phone}}
                                    </div>
                                    <div class=" push-15-t col-sm-12">
                                        <h4>Email:</h4>
                                        <i class="si si-envelope"></i> {{$Config->email}}
                                    </div>
                                </div>
                                <div class="content content-narrow">
                                    {!! Form::open(['action'=> ['HomeController@contact']]) !!}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                {!! Form::label(trans('cabecera.form_name').':', null, ['class' => 'control-label']) !!}
                                                {!! Form::text('name', old('name'), ['class' => 'form-control','required','placeholder'=>trans('cabecera.placeholder_name')]) !!}
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                {!! Form::label(trans('cabecera.form_email').':', null, ['class' => 'control-label']) !!}
                                                {!! Form::text('email', old('email'), ['class' => 'form-control','required','placeholder'=>trans('cabecera.placeholder_email')]) !!}
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                                {!! Form::label('Phone:', null, ['class' => 'control-label']) !!}
                                                {!! Form::text('phone', old('phone'), ['class' => 'form-control','placeholder'=>'Enter your Phone']) !!}
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
                                                {!! Form::label('Country/State:', null, ['class' => 'control-label']) !!}
                                                {!! Form::text('country', old('country'), ['class' => 'form-control','placeholder'=>'Enter your Country and State']) !!}
                                                @if ($errors->has('country'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                   
                                  
                                    <div class="form-group {{ $errors->has('text') ? ' has-error' : '' }}">
                                        {!! Form::label('Message:', null, ['class' => 'control-label']) !!}
                                        {!! Form::textarea('text', old('text'), ['class' => 'form-control','rows'=>3,'required','placeholder'=>'What would you like to enjoy?']) !!}
                                        @if ($errors->has('text'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('text') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    
                                    <div class="form-group ">
                                        <div class=" text-center">
                                            <button type="submit" class="btn btn-primary btn-minw">
                                                @lang('general.Submit')
                                            </button>
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