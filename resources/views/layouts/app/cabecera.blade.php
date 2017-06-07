<!-- Quitar cuendo este en prodcuccion -->
<div class=" text-white-op bg-secondary">
    <div class="content-boxed h4 content-mini content-mini-full flex-center">
        -- We are building the Website --
    </div>
</div>

<nav class="bg-primary v-center">
    <div class="content-boxed ">
        <div class="flex-between">
            <div class="col-sm-4 col-lg-3 v-center flex-left ">
                <a href="{{ url('/') }}">
                    <img class="logo " alt="logo travelongo" src="{{asset('img/logo-blanco.svg')}}">
                </a>
            </div>
            <div class="col-sm-4 col-lg-6  v-center hidden-xs ">
                <div class=" text-center">
                    {!! Form::open(['action'=> ['SearchController@index'],'id'=>'search']) !!}
                        <div class=" input-group">
                            {!! Form::text('search', old('search'), ['class' => 'form-control search']) !!}
                            <span onclick="buscar()" class="btn input-group-addon"><i class="si si-magnifier"></i></span>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 col-xs-5 v-center flex-center">
                <ul class="nav-header v-center">
                    @if (Auth::guest())
                        <div class=" hidden-xs">
                            <a href="" data-toggle="modal" data-target="#loginModal"
                               class="text-white push-10-r">@lang('cabecera.Login')</a>
                            <a href="#" data-toggle="modal" data-target="#registerModal"
                               class=" text-white push-10-r">@lang('cabecera.Register')</a>
                        </div>

                    @else
                        <div class="push-10-r  hidden-xs">
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
                                        <a tabindex="-1" href="{{url('account/dashboard')}}">
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
                        </div>
                        <div class="push-10-r hidden-xs ">
                            <a class="text-white" href="{{url('account/dashboard')}}">@lang('cabecera.Hi',['name'=> Auth::user()->name])</a>
                        </div>
                    @endif
                    <div class="push-20-r push-5-l">
                        <a class="text-white h4 flex-center " type="button" data-toggle="layout"
                           data-action="side_overlay_toggle">
                            <i class="fa fa-shopping-cart"></i>
                            @if(!Cart::isEmpty())
                                <span class="badge pull-right">{{Cart::getTotalQuantity()}}</span>
                            @endif
                        </a>
                    </div>
                    <li class="hidden-xs hidden-sm flex-center">
                        <span class="push-5-r">@lang('cabecera.Lang')</span>
                        <div class="btn-group ">
                            
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
                    <div class="visible-xs visible-sm pull-right">
                        <button class="btn btn-link text-white pull-right" data-toggle="class-toggle"
                                data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </div>
                </ul>
            </div>
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
            @if(isset($item->type))
                @if($item->type == 0)
                    <?php $active = trans('general.packages') ?>
                @elseif($item->type == 1)
                    <?php $active = trans('general.activities') ?>
                @elseif($item->type == 2)
                    <?php $active = trans('general.hotels') ?>
                @endif
                
            @else
                <?php $active = 'no aplica'?>
            @endif
            @foreach($menu->where('local',App::getLocale())->where('status',1) as $sub_menu)
                <li class="v-center">
                    <a class="{{Request::is($sub_menu->slug_url ?: '/') ? 'active' : ($sub_menu->slug_url == $active ? 'active': '')}} text-capitalize"
                       href="{{url($sub_menu->slug_url)}}">{{$sub_menu->name}}</a>
                </li>
            @endforeach
            
            @if (Auth::guest())
                <li class="v-center hidden-md hidden-lg">
                    <a href="" data-toggle="modal" data-target="#loginModal"
                       class="text-white push-10-r">@lang('cabecera.Login')</a>
                </li>
                <li class="v-center hidden-md hidden-lg">
                    <a href="#" data-toggle="modal" data-target="#registerModal"
                       class=" text-white push-10-r">@lang('cabecera.Register')</a>
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
                                    <a class=" font-w600 text-muted"
                                       href="{{url('profile')}}">@lang('cabecera.Profile')</a>
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

@if (Auth::guest())
    @include('layouts.app.partials._form_login')
    @include('layouts.app.partials._form_register')
    @include('layouts.app.partials._login_register')
@endif






