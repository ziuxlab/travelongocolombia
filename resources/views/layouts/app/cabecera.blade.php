<nav class="bg-primary v-center">
    <div class="content-boxed">
        <div class="col-sm-4 col-md-3 v-center">
            <a href="{{ url('/') }}">
                <img class="logo img-responsive"  src="{{asset('img/logo-blanco.svg')}}">
            </a>
        </div>
        <div class="col-sm-4 col-md-5 v-center">
            <div class=" text-center">
                <form class=" ">
                    <div class=" input-group">
                        <input class="form-control">
                        <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4 v-center">
            <ul class="nav-header pull-right">
                @if (Auth::guest())
                   
                            <a href="{{ route('login') }}" class=" text-white push-20-r">Login</a>
                      
                            <a href="{{ route('register') }}" class=" text-white ">Register</a>
                       
                @else
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
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    
    
    </div>
</nav>

<div id="navegacion" class="overflow-hidden text-white bg-secondary mheight-50 remove-padding hidden-xs">
    <div class=" content-boxed text-center">
        <div class="">
            <button href="#why-colombia" class="btn ">
                <button class="btn btn-square mheight-50">Why Colombia?</button>
            </button>
            <button href="#activities" class="btn ">
                <button class="btn btn-square mheight-50">Activities</button>
            </button>
            <button href="#tours" class="btn ">
                <button class="btn btn-square mheight-50">Tours</button>
            </button>
            <button href="#hotels" class="btn ">
                <button class="btn btn-square mheight-50">Hotels</button>
            </button>
            <button href="#about-us" class="btn ">
                <button class="btn btn-square mheight-50">About Us</button>
            </button>
            <button href="#contact" class="btn ">
                <button class="btn btn-square mheight-50">Contact</button>
            </button>
            <button href="#sostenibility-policy" class="btn ">
                <button class="btn btn-square mheight-50">Sostenibility Policy</button>
            </button>
        </div>
    </div>
</div>
 


