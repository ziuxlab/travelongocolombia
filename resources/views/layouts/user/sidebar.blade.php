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
            <span class="font-w600 push-10-l">User</span>
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
                    <h3 class="block-title">Block</h3>
                </div>
                <div class="block-content">
                    <p>...</p>
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
                            <span class="sides sidebar-mini-hide">@lang('dashboard_user.change_password')</span>
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
