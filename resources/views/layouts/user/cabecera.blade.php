<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full org">
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
                    <li class="dropdown-header">Profile</li>
                    <li>
                        <a tabindex="-1" href="{{url('/')}}">
                            <i class="si si-user pull-right"></i>
                            <span class="badge badge-success pull-right">1</span>Profile
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="{{url('/')}}">
                            <i class="si si-settings pull-right"></i>Settings
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Actions</li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul> 
            </div>

        </li>

        <li class="licart">
          <div class="push-15-r">
                        <a class="text-white h5 flex-center " type="button" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-shopping-cart"></i>
                            @if(!Cart::isEmpty())
                                <span class="badge pull-right">{{Cart::getTotalQuantity()}}</span>
                            @endif
                        </a>
                    </div>
        </li>
    </ul>
    <ul class="nav-header pull-left">
        <li class="hidden-md hidden-lg">
            <button class="btn btnorange" data-toggle="layout" data-action="sidebar_toggle" type="button">
                <i class="fa fa-navicon"></i>
            </button>
        </li>
    </ul>
</header>
<!-- END Header -->