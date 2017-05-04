<div class="bg-white ">
    <div class="block">
        <div class="block-header bg-primary text-center h4 text-white">
            - @lang('general.related_packages') -
        </div>
        <div class="block-content  ">
            @foreach($products->where('type','0')->where('local',App::getLocale())->where('id','<>',$item->id)->random(2) as $package)
                <div class=" ">
                    <a class="block  block-rounded" href="{{url(trans('general.packages').'/'.$package->slug_url)}}">
                        <div class="bg-image img-rounded-t"
                             style="background-image: url('{{asset(count($package->photos)>0 ? $package->photos->sortBy('order')->first()->img : 'img/banner/about-us.jpg')}}'); background-position-x: 50%;">
    
                            <div class="mheight-150">
                                @if($package->discount > 0)
                                    <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                                        <div class="ribbon-box font-w600">
                                            {{$package->discount}}% Off
                                        <!--
                                        ${{number_format($package->price_adults * ( 1 + ($package->discount/100)))}}
                                                -->
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="block-content  text-center bg-black-op">
                                <div class="row ">
                                    <div class="col-sm-12  push-15 text-white">
                                        <span class="pull-left  font-w600 h5">{{$package->tittle}}</span>
                                        <span class="pull-right  font-w600 h5"><i
                                                    class="fa fa-clock-o push-5-r"></i> {{$package->days}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</div>