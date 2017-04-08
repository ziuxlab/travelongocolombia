<div class="bg-black">
    @if(count($item->photos) > 0)
        <div class="bg-image   overflow-hidden"
             style="background-image: url('{{asset($item->photos->sortBy('order')->first()->img)}}');">
            @else
                <div class="bg-image  overflow-hidden" style="background-image: url('{{asset('img/banner/about-us.jpg')}}');">
                    @endif
                    <div class=" bg-black-op overflow-hidden">
                        <div class="content-boxed push-200-t content">
                            <div class="row">
                                <div class="col-sm-8 text-white text-center-xs text-capitalize animated fadeInDown">
                                    <h1 class="h1 font-w700  ">
                                        {{$item->tittle}}
                                    </h1>
                                    @if($item->type==0)
                                        <div>@lang('general.packages')</div>
                                    @elseif($item->type==1)
                                        <div>@lang('general.activities')</div>
                                    @elseif($item->type==2)
                                        <div>@lang('general.hotels')</div>
                                    @endif
                                </div>
                                <div class="col-sm-4 text-white animated fadeInDown">
                                    <div class="price-banner text-center content-mini content-mini-full">
                                        <h2 class="h1 font-w700">$ {{number_format($item->price_adults * (1 - ($item->discount/100)))}}*</h2>
                                        <div class="h5">*Per Adult</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        

