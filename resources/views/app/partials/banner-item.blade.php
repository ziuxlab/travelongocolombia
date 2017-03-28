<div class="bg-black">
    @if(count($item->photos) > 0)
        <div class="bg-image text-center  overflow-hidden"
             style="background-image: url('{{asset($item->photos->sortBy('order')->first()->img)}}');">
            
            
            @else
                <div class="bg-image text-center  overflow-hidden"
                     style="background-image: url('{{asset('img/banner/about-us.jpg')}}');">
                    
                    
                    @endif
                    
                    <div class=" bg-black-op overflow-hidden">
                        <div class="content-boxed push-200-t  ">
                            <div class="content pull-left text-white content-full  animated fadeInDown">
                                <h1 class="h1 font-w700 ">
                                    {{$item->tittle}}
                                </h1>
                                <div class="pull-left">@lang('general.packages')</div>
                            </div>
                            <div class="content pull-right text-white push-30  animated fadeInDown">
                                <h2 class="h1 font-w700   ">
                                    <span class="text-primary">$</span> {{number_format($item->price_adults)}}*
                                </h2>
                                <div class="h5">*Per Person</div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



