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
                        <a href="#" class="list-group-item h5"><span class="fa fa-camera push-5-r"></span> Packages</a>
                        <a href="#" class="list-group-item h5"><span class="fa fa-camera push-5-r"></span> Adventure</a>
                        <a href="#" class="list-group-item h5"><span class="fa fa-camera push-5-r"></span> Romantic</a>
                        <a href="#" class="list-group-item h5"><span class="fa fa-camera push-5-r"></span> Categories</a>
                    </div>
                </div>
                
                <div class="block block-rounded block-bordered bg-white text-center ">
                    <div class="block-content block-content-full">
                        <div class="h3 push-10 ">Need Help?</div>
                        <div class="font-s48"><span class="si si-earphones-alt text-primary "></span></div>
                        <div class="h3">{{$Config->phone}}</div>
                        <div>Monday to friday 9:00 am - 7:30 pm</div>
                    </div>
                </div>
            
            </div>
            <!-- end sider -->
            
            
            <div class="col-md-9">
                @foreach($packages->where('local',App::getLocale()) as $package)
                    <div class="block block-bordered  flex overflow-hidden">
                        <div class="col-md-4 col-sm-3 col-xs-12  bg-image remove-padding"
                             style="background-image: url('{{asset($package->photos->sortBy('order')->first()->img)}}');">
                            <div class="mheight-150">
                                <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                                    <div class="ribbon-box font-w600">
                                        {{$package->discount}}% Off
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 border-black-op-r border-black-op-b  content">
                            <a href="{{url('/item')}}">
                                <h2 class="h3">{{$package->tittle}}</h2>
                            </a>
                            <p class="push-15">{{substr($package->meta_description,0,170)}} [...]
                            </p>
                            <div class="push-20">
                                <button class="btn btn-default ">
                                    <span class="glyphicon glyphicon-plane"></span>
                                </button>
                                <button class="btn btn-default  push-10-l">
                                    <span class="fa fa-building-o"></span>
                                </button>
                                <button class="btn btn-default push-10-l">
                                    <span class="fa fa-calendar"></span>
                                </button>
                                <button class="btn btn-default push-10-l">
                                    <span class="fa fa-money"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12  content content-full text-center flex-center">
                            <div>
                                <div class="h1 font-w700 ">
                                    ${{number_format($package->price_adults * ( 1 + ($package->discount/100)))}}*
                                </div>
                                <div>*@lang('general.person')</div>
                                <a href="{{url('packages/'.$package->slug_url)}}" class="btn btn-primary push-20-t ">@lang('general.view details')</a>
                            </div>
                           
                        </div>
                    </div>
                @endforeach
            
            
            </div>
        </div>
    
    </div>


@stop

@section('scripts')
    {{$Config->scripts_footer}}
@stop