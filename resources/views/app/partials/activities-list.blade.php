@foreach($products->where('local',App::getLocale()) as $activity)
<div class="block block-bordered  flex overflow-hidden">
    <div class="col-md-4 col-sm-3 col-xs-12  bg-image remove-padding"
    style="background-image: url('{{asset($activity->photos->sortBy('order')->first()->img)}}');">
    <div class="mheight-150">
        <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
            <div class="ribbon-box font-w600">
                {{$activity->discount}}% Off
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 border-black-op-r border-black-op-b  content">
    <a href="{{url(trans('general.activities').'/'.$activity->slug_url)}}">
        <h2 class="h3">{{$activity->tittle}}</h2>
    </a>
    <p class="push-15">{{substr($activity->meta_description,0,170)}} [...]
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
            ${{number_format($activity->price_adults * ( 1 + ($activity->discount/100)))}}*
        </div>
        <div>*@lang('general.person')</div>
        <a href="{{url(trans('general.activities').'/'.$activity->slug_url)}}"
         class="btn btn-primary push-20-t ">@lang('general.view details')</a>
     </div>
 </div>
</div>
@endforeach
<div>{!! str_replace('/?','?',$products->render()) !!}</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>