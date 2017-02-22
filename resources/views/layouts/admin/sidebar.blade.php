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
                    <li>
                        <a class="active tutorial-dashboard" href="{{Url('/')}}"><i class="si si-speedometer"></i><span
                                    class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li class="tutorial-menu-productos">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span
                                    class="sidebar-mini-hide">Páginas</span></a>
                        <ul>
                            <li class="tutorial-sub-productos">
                                <a href="{{Url('productos')}}">Pages</a>
                            </li>
                            <li class="tutorial-sub-servicios">
                                <a href="{{Url('servicios')}}">Users</a>
                            </li>
                           
                            <li class="tutorial-sub-atributos">
                                <a href="{{Url('atributos')}}">Settin</a>
                            </li>
                            <li class="tutorial-sub-carga">
                                <a href="{{Url('productos/carga_masiva')}}">Carga Masiva</a>
                            </li>
                           
                            <li class="tutorial-sub-informes">
                                <a href="{{Url('productos/informes')}}">Informes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="tutorial-menu-contactos">
                        <a  href="{{url('admin/users')}}"><i class="si si-users"></i><span
                                    class="sidebar-mini-hide">Usuarios</span></a>
                    </li>
                    <li class="tutorial-menu-bodegas">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-home"></i><span
                                    class="sidebar-mini-hide">Bodegas</span></a>
                        <ul>
                            
                            <li class="tutorial-menu-bodegas-inventarios">
                                <a href="{{Url('inventarios')}}">Inventarios</a>
                            </li>
                           
                            <li class="tutorial-menu-bodegas-bodegas">
                                <a href="{{Url('bodegas')}}">Bodegas</a>
                            </li>
                           
                            <li class="tutorial-menu-bodegas-traslados">
                                <a href="{{Url('traslados')}}">Traslados</a>
                            </li>
                          
                            <li class="tutorial-menu-bodegas-informes">
                                <a href="{{Url('bodegas/informes')}}">Informes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="tutorial-menu-ventas">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{Url('productos')}}"><i
                                    class="si si-basket"></i><span class="sidebar-mini-hide">Ventas</span></a>
                        <ul>
                            <li class="tutorial-menu-ventas-pos">
                                <a href="{{Url('ventas/pos')}}">POS</a>
                            </li>
                            <li class="tutorial-menu-ventas-ventas">
                                <a href="{{Url('ventas')}}">Ventas</a>
                            </li>
                            <li class="tutorial-menu-ventas-remisiones">
                                <a href="{{Url('remision')}}">Remisiones</a>
                            </li>
                            <li class="tutorial-menu-ventas-despachos">
                                <a href="{{Url('despachos')}}">Despachos</a>
                            </li>
                            <li class="tutorial-menu-ventas-informes">
                                <a href="{{Url('ventas/informes')}}">Informes</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="tutorial-menu-compras">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-handbag"></i><span
                                    class="sidebar-mini-hide">Compras</span></a>
                        <ul>
                            <li class="tutorial-menu-compras-compras">
                                <a href="{{Url('compras')}}">Compras</a>
                            </li>
                            <li class="tutorial-menu-compras-informes">
                                <a href="{{Url('compras/informes')}}">Informes</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="tutorial-menu-gastos">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wallet"></i><span
                                    class="sidebar-mini-hide">Gastos</span></a>
                        <ul>
                            <li class="tutorial-menu-gastos-gastos">
                                <a href="{{Url('gastos')}}">Gastos</a>
                            </li>
                            <li class="tutorial-menu-gastos-informes">
                                <a href="{{Url('gastos/informes')}}">Informes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="tutorial-menu-caja">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wallet"></i><span
                                    class="sidebar-mini-hide">Caja</span></a>
                        <ul>
                            <li class="tutorial-menu-caja-caja">
                                <a href="{{Url('caja')}}">Cajas</a>
                            </li>
                            <li tutorial-menu-caja-ingresos>
                                <a href="{{Url('ingresos')}}">Ingresos</a>
                            </li>
                            <li class="tutorial-menu-caja-egresos">
                                <a href="{{Url('egresos')}}">Egresos</a>
                            </li>
                            <li class="tutorial-menu-caja-informes">
                                <a href="{{Url('caja')}}">Informes</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="tutorial-menu-finanzas">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="{{Url('finanzas')}}">
                            <i class="fa fa-bank"></i>
                            <span class="sidebar-mini-hide">Finanzas</span></a>
                        <ul>
                            <li class="tutorial-menu-finanzas-bancos">
                                <a href="{{Url('finanzas/bancos')}}">Cuentas Bancarias</a>
                            </li>
                            <li class="tutorial-menu-finanzas-pagos">
                                <a href="{{Url('configuracion/formas-pago')}}">Formas de pago</a>
                            </li>
                            <li class="tutorial-menu-finanzas-transferencias">
                                <a href="{{Url('transferencias')}}">Tranferencias</a>
                            </li>
                        </ul>
                    </li>
                    <li class="tutorial-menu-configuraciones">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-cog"></i><span
                                    class="sidebar-mini-hide">General</span></a>
                        <ul>
                            <li class="tutorial-menu-configuraciones-usuarios">
                                <a href="{{Url('usuarios')}}">Usuarios</a>
                            </li>
                            <li class="tutorial-menu-configuraciones-tiendas">
                                <a href="{{Url('tiendas')}}">Tiendas</a>
                            </li>
                            @role('administrador|superadmin')
                            <li class="tutorial-menu-configuraciones-general">
                                <a href="{{Url('configuracion')}}">General</a>
                            </li>
                            <li class="tutorial-menu-configuraciones-general">
                                <a href="{{Url('bill')}}">Facturación</a>
                            </li>
                            @endrole
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