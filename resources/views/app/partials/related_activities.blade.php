<div class="bg-white ">
    <div class="block">
        <div class="block-header bg-primary text-center h3 text-white">
        - @lang('general.relatedactivities') -
        </div>
        <div class="block-content  ">
            @foreach($products->where('type','1')->where('local',App::getLocale())->where('id','<>',$item->id)->random(2) as $activity)
            <div class=" ">
                <a class="block  block-rounded" href="{{url(trans('general.activities').'/'.$activity->slug_url)}}">
                    <div class="bg-image img-rounded-t"
                    style="background-image: url('{{asset($activity->photos->sortBy('order')->first()->img)}}');">
                    <div class="mheight-150">
                        <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                            <div class="ribbon-box font-w600">
                                ${{number_format($activity->price_adults * ( 1 + ($activity->discount/100)))}}
                            </div>
                        </div>
                    </div>
                    <div class="block-content  text-center bg-black-op">
                        <div class="row ">
                            <div class="col-sm-12  push-15 text-white">
                                <span class="pull-left  font-w600 h5">{{$activity->tittle}}</span>
                                <span class="pull-right  font-w600 h5"><i
                                    class="fa fa-clock-o push-5-r"></i> {{$activity->days}} @lang('general.days')</span>
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