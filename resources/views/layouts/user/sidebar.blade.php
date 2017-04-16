<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="side-header side-content">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default pull-right" type="button" data-toggle="layout"
                    data-action="side_overlay_close">
                <i class="fa fa-times"></i>
            </button>
              <span>
                @if (!Auth::guest())
                    @if(Auth::user()->img == null)
                        <img class="img-avatar img-avatar32"
                             src="{{url('img/default.png')}}"
                             alt="{{Auth::user()->name}}">
                    @else
                        
                        <img class="img-avatar img-avatar32"
                             src="{{url(Auth::user()->img)}}"
                             alt="{{Auth::user()->name}}">
                    @endif
                    <span class="font-w600 push-10-l">{{Auth::user()->name}}</span>
                @endif
                   
                </span>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="side-content remove-padding-t">
            <!-- Block -->
            <div class="block pull-r-l">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                    data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Shopping Cart ({{Cart::getTotalQuantity()}})</h3>
                </div>
                <div class="block-content">
                       <div class="pull-r-l">
                        <table class="table table-borderless table-vcenter">
                            <tbody>
                            @foreach(Cart::getContent() as $item)
                            <tr>
                                <td class="text-center">
                                    {!! Form::open(['action'=> ['CartController@destroy',$item->id],'method'=>'delete']) !!}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>
                                    {!! Form::close() !!}
                                      </td>
                                <td class="text-center">
                                    <span class="badge">{{$item->quantity}}</span>
                                </td>
                                <td>
                                    <span class="h5" >{{$item->name}}</span>
                                    <div class="font-s12 text-muted">Package Tour</div>
                                </td>
                                <td class="text-right">
                                    <div class="font-w600 text-success">${{number_format($item->price) }}</div>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="success">
                                <td class="text-right" colspan="3">
                                    <span class="h4 font-w600">Total</span>
                                </td>
                                <td class="text-right">
                                    <div class="h4 font-w600 text-success">${{number_format(Cart::getTotal())}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="4">
                                    <a class="btn btn-minw  btn-default push-10-r" href="{{url('cart/clear')}}">
                                         Clear
                                    </a>
                                    <a class="btn  btn-minw btn-orange" href="{{url('cart')}}">
                                        Checkout
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Block -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
<!-- END Side Overlay -->

<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-orange">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout"
                        data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <a class="text-white" href="{{Url('/')}}">
                    <img class="" src="{{ asset('img/logo-blanco.svg') }}" alt="Ziuxlab"
                         height="50">
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                    <p class="tittlesr">@lang('dashboard_user.account')</p>
                    <li class="sideli @if($active=='dashboard') active @endif">
                        <a href="{{Url('/user/account/dashboard')}}" class="sidea">
                            <i class="sidei fa fa-tachometer fa-lg"></i>
                            <span class="sides sidebar-mini-hide">@lang('dashboard_user.dashboard')</span>
                        </a>
                    </li>
                    <li class="sideli @if($active=='edit-profile') active @endif">
                        <a href="{{url('/user/account/edit-profile')}}" class="sidea">
                            <i class="sidei fa fa-pencil-square-o fa-lg"></i>
                            <span class="sides sidebar-mini-hide">@lang('dashboard_user.edit_profile')</span>
                        </a>
                    </li>
                    <li class="sideli @if($active=='change-password') active @endif">
                        <a href="{{url('/user/account/change-password')}}" class="sidea">
                            <i class="sidei fa fa-unlock-alt fa-lg"></i>
                            <span class="lbpd sides sidebar-mini-hide">@lang('dashboard_user.change_password')</span>
                        </a>
                    </li>
                    <hr>
                    <p class="tittlesr">@lang('dashboard_user.bookings')</p>
                    <li class="sideli @if($active=='booking-history') active @endif">
                        <a href="{{url('/user/bookings/booking-history')}}" class="sidea">
                            <i class="sidei fa fa-book fa-lg"></i>
                            <span class="sides sidebar-mini-hide">@lang('dashboard_user.my_bookings')</span>
                        </a>
                    </li>
                    <li class="sideli @if($active=='payments') active @endif">
                        <a href="{{url('/user/bookings/payments')}}" class="sidea">
                            <i class="sidei fa fa-credit-card fa-lg"></i>
                            <span class="sides sidebar-mini-hide">@lang('dashboard_user.my_payments')</span>
                        </a>
                    </li>
                    <hr>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->
