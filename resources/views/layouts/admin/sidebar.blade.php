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
            <span class="font-w600 push-10-l">Admin</span>
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
            <div class="side-header side-content bg-primary-dark">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout"
                        data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <a class="text-white " href="{{Url('/')}}">
                    <img class="" src="{{ asset('img/logo.svg') }}" alt="Ziuxlab"
                         height="50">
                </a>
            </div>
            <!-- END Side Header -->
            
            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                <!-- <li>
                        <a class="{{Request::is('admin/home') ? 'active' :''}}tutorial-dashboard" href="{{Url('admin/home')}}"><i class="si si-speedometer"></i><span
                                    class="sidebar-mini-hide">Dashboard</span></a>
                    </li> -->
                    <li>
                        <a class="{{Request::is('admin/pages') ? 'active' :''}}" href="{{url('admin/pages')}}"><i class="si si-docs"></i><span
                                    class="sidebar-mini-hide">Páginas</span></a>
                    </li>
                   
                    <li>
                        <a class="{{Request::is('admin/components') ? 'active' :''}}" href="{{Url('admin/components')}}"><i class="si si-grid"></i><span
                                    class="sidebar-mini-hide">Componentes</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/packages') ? 'active' :''}}"  href="{{url('admin/packages')}}"><i class="si si-docs"></i><span
                                    class="sidebar-mini-hide">Paquetes</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/activities') ? 'active' :''}}" href="{{url('admin/activities')}}"><i class="fa fa-bicycle"></i><span
                                    class="sidebar-mini-hide">Actividades</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/hotels') ? 'active' :''}}" href="{{url('admin/hotels')}}"><i class="fa fa-building-o"></i><span
                                    class="sidebar-mini-hide">@lang('general.hotels')</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/services') ? 'active' :''}}" href="{{url('admin/services')}}"><i class="si si-equalizer"></i><span
                                    class="sidebar-mini-hide">Services</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/flights') ? 'active' :''}}" href="{{url('admin/flights')}}"><i class="si si-plane"></i><span
                                    class="sidebar-mini-hide">@lang('general.flights')</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/messages') ? 'active' :''}}" href="{{url('admin/messages')}}"><i class="fa fa-envelope-o"></i><span
                                    class="sidebar-mini-hide">Mensajes</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/booking') ? 'active' :''}}" href="{{url('admin/booking')}}"><i class="fa fa-dollar"></i><span
                                    class="sidebar-mini-hide">Ventas</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('laravel-filemanager?type=Images') ? 'active' :''}}" href="{{url('laravel-filemanager?type=Images')}}"><i class="si si-camera"></i><span
                                    class="sidebar-mini-hide">Multimedia</span></a>
                    </li>
                    <li>
                        <a class="{{Request::is('admin/users') ? 'active' :''}}" href="{{url('admin/users')}}"><i class="si si-users"></i><span
                                    class="sidebar-mini-hide">Usuarios</span></a>
                    </li>
                    
                    <li class="">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-settings"></i><span
                                    class="sidebar-mini-hide">Configuraciones</span></a>
                        <ul>
                            <li class="">
                                <a href="{{Url('admin/settings/html')}}">Html</a>
                            </li>
                            <li class="">
                                <a href="{{Url('admin/settings/general')}}">General</a>
                            </li>
                            <li class="">
                                <a href="{{Url('admin/settings/social')}}">Social</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->