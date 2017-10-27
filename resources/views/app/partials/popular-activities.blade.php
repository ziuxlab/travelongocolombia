<div class="bg-primary-darkest">
    <div class="content-boxed text-white">
        <div class="col-sm-12 content content-full text-center">
            <h2 class="h2">@lang('general.Popular Activities')</h2>
            @if(App::isLocale('en'))
                <h4 class="h5 ">"Get to know the places and activities we have selected for you"</h4>
            @else
                <h4 class="h5 ">"Para su conveniencia, hemos compilado las actividades más populares en diferentes opciones de paquetes vacacionales todo incluido a Colombia, las cuales podrán ayudarle a organizar más rápidamente su experiencia vacacional en el eje cafetero colombiano" </h4>
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
                                    <p class="text-justify ">{{mb_substr($activity->short_description,0,120,'UTF-8')}}...</p>
                                    <p class="btn push-20 btn-minw  text-white btn-primary text-capitalize">@lang('general.view details')</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <h4>So, you haven´t found the perfect trip package?<br>
                    Click the next button and you can easily design your own itinerary.</h4>
                @if(App::isLocale('en'))
                <a href="{{url('design-your-trip')}}" class="btn push-20 btn-minw  text-white btn-primary text-capitalize">Design your trip</a>
                @else
                    <a href="{{url('disena-tu-viaje')}}" class="btn push-20 btn-minw  text-white btn-primary text-capitalize">Diseñar tu viaje</a>
                @endif
            </div>
        </div>
    </div>
</div>

