<div class="block block-bordered block-rounded">
    <div class="block-header bg-gray-lighter">
        <h3 class="h5">City</h3>
    </div>
    <div class="block-content">
        <select class="form-control" name="city" placeholder="Select your destination" id="city">
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->city}}</option>
            @endforeach
        </select>
    </div>
    <div class="block-content block-content-full text-center">
        <button class="btn btn-primary filter btn-minw">Filter</button>
    </div>
</div>
<div class="block block-bordered block-rounded">
    <div class="block-header bg-gray-lighter">
        <h3 class="h5">@lang('general.categories')</h3>
    </div>
    <div class="list-group">
        @foreach($features->where('type',$type) as $item)
            <a href="{{url('products/list/'.$type.'?feature='.$item->id)}}" class="list-group-item  h5"><i
                        class="{{$item->icon}} push-10-r"></i>{{$item->feature}}</a>
        @endforeach
    </div>

</div>
