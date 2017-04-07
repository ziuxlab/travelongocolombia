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
        <!-- sider -->
        <div class="col-md-3 push ">
            <div class="block">
                <div class="list-group">
                    <li class="list-group-item active h5"> Categories</li>
                   
                        @foreach($features->where('type',1) as $item)
                               <a href="#" class="list-group-item  h5"><i class="{{$item->icon}} push-10-r"></i>{{$item->feature}}</a>
                        @endforeach
                 
                    
                </div>
            </div>
            @include('app.partials.needhelp')
        </div>
        <!-- end sider -->

        <!-- activities -->
        <div class="col-md-9">
            <div id="content"></div>
        </div>
        <!-- end activities -->
    </div>
</div>
@stop

@section('scripts')
{{$Config->scripts_footer}}
@include('layouts.app.partials._list', ['type'=> 1])
@stop