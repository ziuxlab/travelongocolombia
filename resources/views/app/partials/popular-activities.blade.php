<div class="bg-primary-darkest">
    <div class="content-boxed text-white">
        <div class="col-sm-12 content content-full text-center">
            <h2 class="h2">@lang('general.Popular Activities')</h2>
            <h3 class="h5 ">"We have a unique way at meeting your adventures expectational" </h3>
        </div>
    </div>
    <div class="content-boxed content content-full">
        <div class="row  text-center">
            @foreach($activities->where('local',App::getLocale())->random(3) as $activity)
                <div class="col-sm-6 col-md-4">
                    <a class="block block-sombra block-rounded block-link-hover2"
                       href="{{url(trans('general.activities').'/'.$activity->slug_url)}}">
                        <div class="bg-image img-rounded-t "
                             style="background-image: url('{{asset($activity->photos->sortBy('order')->first()->img)}}');">
                            <div class="mheight-200">
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center">
                                <div class="col-xs-8">
                                    <div class=" text-left">
                                        <h2 class="h4 font-w600 text-info">{{$activity->tittle}}</h2>
                                        <p class="text-gray-dark remove-margin">[...]
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class=" text-right">
                                        <div class="h4 font-w600 text-primary">
                                            ${{number_format($activity->price_adults * ( 1 + ($activity->discount/100)))}}</div>
                                        <b class="text-gray-dark remove-margin">
                                            <span class="si si-clock"></span> {{$activity->duration}}
                                        </b>
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

