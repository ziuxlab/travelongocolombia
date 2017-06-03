<div class="bg-primary-darkest">
    <div class="content-boxed text-white">
        <div class="col-sm-12 content content-full text-center">
            <h2 class="h2">@lang('general.Popular Activities')</h2>
            @if(App::isLocale('en'))
                <h4 class="h5 ">"We have a unique way at meeting your adventures expectational" </h4>
            @else
                <h4 class="h5 ">"Tenemos una manera única de cumplir con sus expectativas" </h4>
            @endif
        </div>
    </div>
    <div class="content-boxed content content-full">
        <div class="row  text-center">
            @foreach($products->where('local',App::getLocale())->where('type',1)->random(count($products->where('local',App::getLocale())->where('type',1)) >3 ? 3 : count($products->where('local',App::getLocale())->where('type',1))) as $activity)
                <div class="col-sm-6 col-md-4">
                    <a class="block block-sombra block-rounded block-link-hover2"
                       href="{{url(trans('general.activities').'/'.$activity->slug_url)}}">
                        <div class="bg-image img-rounded-t "
                              style="background-image: url('{{asset(count($activity->photos)>0 ? $activity->photos->sortBy('order')->first()->img : 'img/banner/about-us.jpg')}}'); background-position-x: 50%;">
    
                            <div class="mheight-200">
                                @if($activity->discount > 0 or $activity->discount <> null)
                                    <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                                        <div class="ribbon-box font-w600">
                                            {{$activity->discount}}% Off
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="block-content block-content-mini">
                            <div class=" push-5 border-b ">
                                <div class="flex-between">
                                    <h2 class="h5 text-left font-w600">{{$activity->tittle}}</h2>
                                </div>
                                <div class="flex-between push-5">
                                    <div>
                                        <p class="text-gray-dark remove-margin">{{$activity->city->city}} </p>
                                    </div>
                                    <div class="text-gray-dark remove-margin">
                                        <span class="si si-clock"></span> {{$activity->days}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p class="text-justify ">{{mb_substr($activity->description,0,120,'UTF-8')}}...</p>
                                    <p class="btn push-20 btn-minw  text-white btn-primary text-capitalize">@lang('general.view details')</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

