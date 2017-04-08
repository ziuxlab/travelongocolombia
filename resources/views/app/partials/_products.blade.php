<div class="block block-bordered  flex overflow-hidden">
    <div class="col-md-4 col-sm-3 col-xs-12  bg-image remove-padding"
         style="background-image: url('{{asset($product->photos->sortBy('order')->first()->img)}}');">
        <div class="mheight-150">
            @if($product->discount > 0 or $product->discoun <> null)
                <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                    <div class="ribbon-box font-w600">
                        {{$product->discount}}% Off
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 border-black-op-r border-black-op-b  content">
        @if($product->type == 0)
            <a href="{{url(trans('general.packages').'/'.$product->slug_url)}}">
                <h2 class="h3">{{$product->tittle}}</h2>
            </a>
        @endif
        @if($product->type == 1)
            <a href="{{url(trans('general.activities').'/'.$product->slug_url)}}">
                <h2 class="h3">{{$product->tittle}}</h2></a>
        @endif
        @if($product->type == 2)
            <a href="{{url(trans('general.hotels').'/'.$product->slug_url)}}">
                <h2 class="text-c h3">{{$product->tittle}}</h2></a>
        @endif
        <p class="push-15">{{substr($product->meta_description,0,170)}} [...]
        </p>
        <div class="push-20">
            @foreach($product->features->where('type',$product->type)->take(5) as $feature)
                <span style="cursor: default" class="btn bg-gray-lighter border push-10-r" data-original-title="{{$feature->feature}}" data-toggle="tooltip" data-placement="top">
                <i class="{{$feature->icon}}"></i>
                </span>
            @endforeach
        </div>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-12  content content-full text-center flex-center">
        <div>
            <div class="h1 font-w700 ">
                ${{number_format($product->price_adults * ( 1 + ($product->discount/100)))}}*
            </div>
            <div>*@lang('general.person')</div>
            @if($product->type == 0)
                <a href="{{url(trans('general.packages').'/'.$product->slug_url)}}"
                   class="btn btn-primary push-20-t ">@lang('general.view details')</a>
            @endif
            @if($product->type == 1)
                <a href="{{url(trans('general.activities').'/'.$product->slug_url)}}"
                   class="btn btn-primary push-20-t ">@lang('general.view details')</a>
            @endif
            @if($product->type == 2)
                <a href="{{url(trans('general.hotels').'/'.$product->slug_url)}}"
                   class="btn btn-primary push-20-t ">@lang('general.view details')</a>
            @endif
        </div>
    </div>
</div>