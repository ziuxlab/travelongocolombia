<div class="block block-bordered  flex overflow-hidden">
    
    <div class="col-md-4 col-sm-3 col-xs-12  bg-image remove-padding"
         style="background-image: url('{{asset(count($product->photos)>0 ? $product->photos->sortBy('order')->first()->img : 'img/banner/about-us.jpg')}}'); background-position-x: 50%;">
        @if($product->type == 0)
            <a href="{{url(trans('general.packages').'/'.$product->slug_url)}}">
                @elseif($product->type == 1)
                    <a href="{{url(trans('general.activities').'/'.$product->slug_url)}}">
                        @elseif($product->type == 2)
                            <a href="{{url(trans('general.hotels').'/'.$product->slug_url)}}">
                                @endif
                                <div class="mheight-200">
                                    @if($product->discount > 0 or $product->discount <> null)
                                        <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                                            <div class="ribbon-box font-w600">
                                                {{$product->discount}}% Off
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </a>
    </div>
    
    <div class="col-md-6 col-sm-6 col-xs-12 border-black-op-r border-black-op-b  content">
        @if($product->type == 0)
            <a href="{{url(trans('general.packages').'/'.$product->slug_url)}}">
                <h2 class="h3 text-capitalize">{{$product->tittle}}</h2>
            </a>
            <p class="push-10">{{mb_substr($product->short_description,0,171,'UTF-8')}}...</p>
        
        @endif
        @if($product->type == 1)
            <a href="{{url(trans('general.activities').'/'.$product->slug_url)}}">
                <h2 class="h4 text-capitalize">{{$product->tittle}}</h2>
            </a>
            <p class="push-10">{{mb_substr($product->short_description,0,171,'UTF-8')}}...</p>
        @endif
        @if($product->type == 2)
            <a href="{{url(trans('general.hotels').'/'.$product->slug_url)}}">
                <h2 class="text-capitalize h3">{{$product->tittle}}</h2>
            </a>
            <p class="push-10">{{mb_substr($product->description,0,171,'UTF-8')}}...</p>
        @endif
        @if($product->features)
            <p class="font-w600 push-5">@lang('general.facilities'):</p>
            <div class="push-20">
                @foreach($product->features->where('type',$product->type)->take(5) as $feature)
                    <span style="cursor: default" class="btn bg-gray-lighter border push-10-r"
                          data-original-title="{{$feature->feature}}" data-toggle="tooltip"
                          data-placement="top">
                <i class="{{$feature->icon}}"></i>
                </span>
                @endforeach
            </div>
        @endif
    </div>
    <div class="col-md-2 col-sm-3 col-xs-12  content content-full text-center flex-center">
        <div>
        <!--
            <div class="h1 font-w700 ">
                ${{number_format($product->price_adults * ( 1 - ($product->discount/100)))}}*
            </div>
            <div>*@lang('general.person'){{$product->type == 2 ? '|*'.trans('general.night'):''}}</div>
            -->
            @if($product->type == 0)
                <a href="{{url(trans('general.packages').'/'.$product->slug_url)}}"
                   class="btn btn-primary push-20-t text-capitalize">@lang('general.view details')</a>
            @endif
            @if($product->type == 1)
                <a href="{{url(trans('general.activities').'/'.$product->slug_url)}}"
                   class="btn btn-primary push-20-t text-capitalize">@lang('general.view details')</a>
            @endif
            @if($product->type == 2)
                <a href="{{url(trans('general.hotels').'/'.$product->slug_url)}}"
                   class="btn btn-primary push-20-t text-capitalize ">@lang('general.view details')</a>
            @endif
        </div>
    </div>
</div>
@include('layouts.app.partials._tooltip')