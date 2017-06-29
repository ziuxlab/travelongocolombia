<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
    <ul class="nav-header pull-right">
        <li>
            <div class="btn-group">
                @if(Auth::user()->img == null)
                    <img class="img-circle dropdown-toggle"
                         src="{{url('img/default.png')}}"
                         alt="Avatar" data-toggle="dropdown" width="36" height="36">
                    
                    @else
                    
                    <img class="img-circle dropdown-toggle"
                         src="{{url(Auth::user()->img)}}"
                         alt="Avatar" data-toggle="dropdown" width="36" height="36">
                @endif
                <ul class="dropdown-menu dropdown-menu-right">
                    @role('admin')
                    <li class="dropdown-header">Perfil</li>
                    <li>
                        <a tabindex="-1" href="{{url('admin/users/'. Auth::user()->id .'/edit')}}">
                            <i class="si si-user pull-right"></i>
                            <span class="badge badge-success pull-right">1</span>Perfil
                        </a>
                    </li>
                    <li class="divider"></li>
                    @endrole
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Salir
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </li>
        <!--
        <li>
            <button class="btn btn-primary" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                <i class="fa fa-tasks"></i>
            </button>
        </li>-->
    </ul>
    <ul class="nav-header pull-left">
        <li class="hidden-md hidden-lg">
            <button class="btn btn-primary" data-toggle="layout" data-action="sidebar_toggle" type="button">
                <i class="fa fa-navicon"></i>
            </button>
        </li>
    </ul>
</header>
<!-- END Header -->