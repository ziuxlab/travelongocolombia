<nav class="bg-primary v-center">
    <div class="content-boxed flex-between">
        <div class="col-sm-4 col-lg-3 v-center flex-left">
            <a href="{{ url('/') }}">
                <img class="logo " alt="logo travelongo" src="{{asset('img/logo-blanco.svg')}}">
            </a>
        </div>
        <div class="col-sm-4 col-lg-6 v-center hidden-xs">
            <div class=" text-center">
                <form class=" ">
                    <div class=" input-group">
                        <input class="form-control">
                        <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4 col-lg-3 v-center flex-right">
            <ul class="nav-header v-center">
                @if (Auth::guest())
                    <div class=" hidden-xs">
                        <a href="{{ route('login') }}" class=" text-white push-20-r">@lang('cabecera.Login')</a>
                        
                        <a href="{{ route('register') }}" class=" text-white push-20-r">@lang('cabecera.Register')</a>
                    </div>
                
                @else
                    <li class=" hidden-xs">
                        <div class="btn-group">
                            @if(Auth::user()->img == null)
                                <img class="img-circle dropdown-toggle"
                                     src="{{url('img/default.png')}}"
                                     alt="Avatar" data-toggle="dropdown" width="36" height="36">
                            @else
                                
                                <img class="img-circle dropdown-toggle"
                                     src="{{url(Auth::user()->img)}}"
                                     alt="user travelongo" data-toggle="dropdown" width="36" height="36">
                            @endif
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">@lang('cabecera.Profile')</li>
                                <li>
                                    <a tabindex="-1" href="{{url('profile')}}">
                                        <i class="si si-user pull-right"></i>
                                        @lang('cabecera.Profile')
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{{url('/')}}">
                                        <i class="si si-settings pull-right"></i> @lang('cabecera.Settings')
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">@lang('cabecera.Actions')</li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('cabecera.Logout')
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        
                        </div>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <a class="text-white" href="">@lang('cabecera.Hi',['name'=> Auth::user()->name])</a>
                    </li>
                
                
                @endif
                <li class="hidden-xs hidden-sm">
                    Lang
                    <div class="btn-group">
                        
                        <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-header"> @lang('cabecera.Language')</li>
                            <li><a tabindex="-1" href="{{url('language/es')}}">Español</a></li>
                            <li><a tabindex="-1" href="{{url('language/en')}}">English</a></li>
                        </ul>
                    </div>
                </li>
                
                <li class="visible-xs visible-sm pull-right">
                    <button class="btn btn-link text-white pull-right" data-toggle="class-toggle"
                            data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                        <i class="fa fa-navicon"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class=" text-white bg-secondary">
    <div class="content-boxed flex-center sub-menu">
        <ul class="js-nav-main-header nav-main-header v-center">
            <li class="text-right hidden-md hidden-lg">
                <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header"
                        data-class="nav-main-header-o" type="button">
                    <i class="fa fa-times"></i>
                </button>
            </li>
            @foreach($menu as $item)
                <li class="v-center">
                    <a class="active text-capitalize" href="{{url($item->slug_url)}}">{{$item->name}}</a>
                </li>
            @endforeach
            <li class="v-center">
                <a href="{{url('/')}}">Why Colombia?</a>
            </li>
            <li class="v-center">
                <a href="{{url('/')}}">Activities</a>
            </li>
            <li class="v-center">
                <a href="{{url('/')}}">Tours</a>
            </li>
            <li class="v-center">
                <a href="{{url('/')}}">Hotels</a>
            </li>
            
            
            @if (Auth::guest())
                <li class="v-center hidden-md hidden-lg">
                    <a href="{{ route('login') }}">@lang('cabecera.Login')</a>
                </li>
                <li class="v-center hidden-md hidden-lg">
                    <a href="{{ route('register') }}">@lang('cabecera.Register')</a>
                </li>
            @else
                <li class="v-center hidden-md hidden-lg">
                    <div class="block push-30-t border-black-op  block-transparent">
                        <div class="block-content  block-content-full text-center">
                            <div>
                                @if(Auth::user()->img == null)
                                    <img class="img-avatar img-avatar48"
                                         src="{{url('img/default.png')}}"
                                         alt="usuario travelongo">
                                @else
                                    
                                    <img class="img-avatar img-avatar48"
                                         src="{{url(Auth::user()->img)}}"
                                         alt="user travelongo">
                                @endif
                            </div>
                            <div class="push-15-t font-w600 push-5">@lang('cabecera.Hi',['name'=> Auth::user()->name])</div>
                        </div>
                        <div class="block-content border-black-op-t">
                            <div class="row items-push text-center">
                                <div class="col-xs-6 border-black-op-r">
                                    <a class=" font-w600 text-muted" href="{{url('profile')}}">@lang('cabecera.Profile')</a>
                                </div>
                                <div class="col-xs-6">
                                    <a class=" font-w600 text-muted" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">@lang('cabecera.Logout')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
            <li class="v-center hidden-md hidden-lg">
                <a class="nav-submenu" href="#">@lang('cabecera.Language')</a>
                <ul>
                    <li class="v-center"><a href="{{url('language/es')}}">Español</a></li>
                    <li class="v-center"><a href="{{url('language/en')}}">English</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
 


