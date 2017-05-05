<div class="block block-bordered block-rounded">
    <div class="block-header bg-gray-lighter">
        <h3 class="h5">@lang('general.city')</h3>
    </div>
    <div class="block-content">
        <select class="form-control" name="city" placeholder="Select your destination" id="city">
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->city}}</option>
            @endforeach
        </select>
    </div>
    <div class="block-content block-content-full text-center">
        <button class="btn btn-primary filter btn-minw">@lang('general.filter')</button>
    </div>
</div>
<div class="block block-bordered block-rounded">
    <div class="block-header bg-gray-lighter">
        <h3 class="h5">@lang('general.categories')</h3>
    </div>
    <div class="list-group">
        @foreach($features->where('type',$type)->where('in_categories',1) as $item)
            @if(App::isLocale('en'))
            <a href="{{url('products/list/'.$type.'?feature='.$item->id)}}" class="list-group-item  h5"><i
                        class="{{$item->icon}} push-10-r"></i>{{$item->feature}}</a>
            @endif
                @if(App::isLocale('es'))
                    <a href="{{url('products/list/'.$type.'?feature='.$item->id)}}" class="list-group-item  h5"><i
                                class="{{$item->icon}} push-10-r"></i>{{$item->feature_es}}</a>
                @endif
        @endforeach
    </div>
</div>
