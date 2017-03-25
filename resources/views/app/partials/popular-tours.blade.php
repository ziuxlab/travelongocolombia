<div class="bg-white">
    <div class="content-boxed ">
        <div class="col-sm-12 content content-full text-center">
            <h2 class="h2">Popular Tours Packages</h2>
            <h4 class="h5 ">"We have a unique way at meeting your adventures expectational" </h4>
        </div>
    </div>
    <div class="content-boxed content content-full">
        <div class="row text-white text-center">
            @foreach($packages->where('local',App::getLocale()) as $package)
            <div class="col-md-4 col-sm-6 push-15">
                <a class="block block-sombra block-rounded block-link-hover2" href="{{url('packages/'.$package->slug_url)}}">
                    <div class="bg-image "
                         style="background-image: url('{{asset($package->photos->sortBy('order')->first()->img)}}');">
                        <div class="mheight-150">
                            <div class=" ribbon ribbon-bookmark ribbon-primary ribbon-left">
                                <div class="ribbon-box font-w600">
                                   ${{number_format($package->price_adults * ( 1 + ($package->discount/100)))}}
                                </div>
                            </div>
                        </div>
                        <div class="block-content  text-center bg-black-op">
                            <div class="row ">
                                <div class="col-sm-12  push-15 text-white">
                                    <span class="pull-left  font-w600 h5">{{$package->tittle}}</span>
                                    <span class="pull-right  font-w600 h5"><i class="fa fa-clock-o push-5-r"></i> {{$package->days}} @lang('general.days')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="text-justify">
                                    {{$package->meta_description}}.
                                </p>
                                <button class="btn push-20 btn-minw text-white btn-primary ">@lang('general.view details')</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>


