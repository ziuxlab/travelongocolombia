<div class="block">
    <div class="block-content block-content-narrow block-content-full">
        <div class="text-center">
            <h2 class="">@lang('general.step-by-step')</h2>
        </div>
        <div class="progress progress-mini">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="25"
                 aria-valuemin="0" aria-valuemax="100"
                 style="width: {{$step > 4 ? '100%' :($step > 3 ? '75%' : ($step > 2 ? '50%': ($step > 1 ? '25%':'0%')))}}">
            </div>
        </div>
        <div class="progress-steps flex-between push-20">
            <a class="text-center" href="{{url(str_slug(trans('cabecera.Design')).'?step=1')}}">
                <div class="item item-circle {{$step > 0 ? 'item-bg-primary' : ''}}
                {{$step == 1 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}} ">
                    1
                </div>
                <div class="push-5-t text-primary-dark">@lang('general.enter information')</div>
            </a>
            <a class="text-center " href="{{ $step > 1 ? url(str_slug(trans('cabecera.Design')).'?step=2') : '#'}}">
                <div class="item item-circle {{$step > 1 ? 'item-bg-primary' : ''}}
                {{$step == 2 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}}  ">
                    2
                </div>
                <div class="push-5-t text-primary-dark">@lang('general.search') @lang('general.hotels')</div>
            </a>
            <a class="text-center " href="{{ $step > 1 ? url(str_slug(trans('cabecera.Design')).'?step=3') : '#'}}">
                <div class="item item-circle {{$step > 2 ? 'item-bg-primary' : ''}}
                {{$step == 3 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}}">
                    3
                </div>
                <div class="push-5-t text-primary-dark">@lang('general.search') @lang('general.activities')</div>
            </a>
            <a class="text-center " href="{{ $step > 1 ? url(str_slug(trans('cabecera.Design')).'?step=4') : '#'}}">
                <div class="item item-circle {{$step > 3 ? 'item-bg-primary' : ''}}
                {{$step == 4 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}}">
                    4
                </div>
                <div class="push-5-t text-primary-dark">@lang('general.additional services')</div>
            </a>
            <a class="text-center " href="{{ $step > 1 ? url(str_slug(trans('cabecera.Design')).'?step=5') : '#'}}">
                <div class="item item-circle {{$step > 4 ? 'item-bg-primary' : ''}}
                {{$step == 5 ? 'bg-secondary text-white' : 'bg-gray-lighter text-primary-dark'}}">
                    5
                </div>
                <div class="push-5-t text-primary-dark">@lang('general.proceed checkout')</div>
            </a>
        </div>
        @if($step <> 1)
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <div class="block block-rounded block-bordered bg-gray-lighter">
                        <div class="block-content block-content-full bg-gray-lighter">
                           <!-- <p class="h5 font-w400">@lang('general.step-skip')</p>-->
                            <div class="row flex-between">
                                <div>
                                    <a class="btn btn-minw btn-primary"
                                       href="{{url(str_slug(trans('cabecera.Design')).'?step='.($step - 1))}}">
                                        <i class="si si-arrow-left pull-left"></i>@lang('general.back')</a>
                                </div>
                                @if($step <> 5)
                                    <div>
                                        <a class="btn btn-minw btn-primary"
                                           href="{{url(str_slug(trans('cabecera.Design')).'?step='.($step + 1 ))}}"><i class="si si-arrow-right pull-right"></i>
                                            @lang('general.skip') </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>