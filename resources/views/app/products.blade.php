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
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @include('app.partials.banner')
    <div class="content-boxed content content-full">
        <div class="row">
            <div class="col-sm-12">
                <div class="block block-bordered block-rounded">
                    <div class="block-content block-content-narrow block-content-full text-center">
                        <i class="si si-info push-15-r "></i>
                        @if(App::isLocale('en'))
                            <span>Choose one, two or three packages at the same time if you want, we will be happy to attend you as longer as you can.</span>
                        @else
                            <span>Eliga uno, dos o tres paquetes al mismo tiempo si desea, nosotros estaremos felices de atenderlo tanto tiempo como usted tenga disponible.</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- sider -->
            <div class="col-md-3 push ">
                @include('app.partials._filters', ['type'=> 0])
                @include('app.partials.needhelp')
            </div>
            <!-- end sider -->
            
            
            <div class="col-md-9">
                <div id="content"></div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{$Config->scripts_footer}}
    @include('layouts.app.partials._list', ['type'=> 0])
@stop