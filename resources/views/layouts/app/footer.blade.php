<div class="bg-primary">
    <div class="content-boxed overflow-hidden">
        <div class=" row content text-white">
            <div class="col-sm-6   ">
                <h4 class="h3"> @lang('general.Signup for Newsletter')</h4>
                @if(App::isLocale('en'))
                    <p>You would like to get discounts and know about our promotions, leave us your email and we will
                       send you information.</p>
                @else
                    <p>Te interesaría obtener descuentos y saber sobre nuestras promociones, déjanos tu correo
                       electrónico y te enviaremos información.</p>
                @endif
            </div>
            <div class="col-sm-6 overflow-hidden">
                <form class="form-horizontal push-20-t">
                    <div class="form-group  ">
                        <div class="input-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                            <span class="input-group-btn">
                                <button class="btn btn-minw btn-primary-darkest"
                                        type="button">@lang('general.Submit')</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="content-boxed">
    <div class="col-sm-12 text-gray">
        <div class="col-md-6 push-10-t text-center">
            <img alt="logo travelongo colombia" class="logo img-responsive" src="{{asset('img/logo-naranja.svg')}}">
            <p class="push-15-t text-justify">
                Travel<span class="text-primary">on</span>go
                @lang('general.footer')
            </p>
            <div class="item-social">
                <a class="item-circle-small push-10-r item-circle bg-gray-lighter" href="{{$Config->facebook}}">
                    <i class="fa fa-facebook text-gray-dark"></i>
                </a>
                
                <a class="item-circle-small push-10-r bg-gray-lighter" href="{{$Config->twitter}}">
                    <i class="fa fa-twitter text-gray-dark"></i>
                </a>
                <a class="item-circle-small push-10-r bg-gray-lighter" href="{{$Config->google}}">
                    <i class="fa fa-google-plus text-gray-dark"></i>
                </a>
                <a class="item-circle-small push-10-r bg-gray-lighter" href="{{$Config->youtbe}}">
                    <i class="fa fa-youtube text-gray-dark"></i>
                </a>
                <a class="item-circle-small  bg-gray-lighter" href="{{$Config->instagram}}">
                    <i class="fa fa-instagram text-gray-dark"></i>
                </a>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 text-left  push-20-t">
            <p class="h3 text-white "> @lang('general.about')</p>
            <br>
            <ul class="list-unstyled">
                <li><a href="{{url(str_slug(trans('general.about-us')))}}">@lang('general.about-us')</li>
                <li><a href="{{url(str_slug(trans('general.sustainability-policy')))}}">@lang('general.sustainability-policy')</a></li>
                <li><a href="{{url(str_slug(trans('general.join-us')))}}">@lang('general.join-us')</a></li>
                <li><a href="" data-toggle="modal" data-target="#loginModal">@lang('cabecera.Login')</a></li>
                <li><a href="#" data-toggle="modal" data-target="#registerModal" >@lang('cabecera.Register')</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-6 text-center push-20-t">
            <h4 class="h3 text-white font-w600">@lang('general.Questions')</h4>
            <span class="item push-20-t item-circle bg-gray-lighter">
            <i class="fa fa-phone text-gray-dark"></i>
        </span>
            <p class="push-20-t h3">{{$Config->phone}}</p>
            <p class="">
                {{$Config->email}}
                <br>
                {{$Config->address}}
            </p>
        </div>
    </div>
    
    <div class="">
        <div class="col-sm-12 border-white-op-t push-15-t content-mini content-mini-full ">
       
            <span class="text-white">
                Copyright © 2017 Travelongo Colombia All Rights Reserved.
            </span>
            
            <span class="text-white pull-right">
                Made with <i class="fa fa-heart text-city"></i> in Colombia by <a
                        href="http://ziuxlab.com">Ziuxlab.com</a>
            </span>
        
        
        </div>
    </div>
</div>

