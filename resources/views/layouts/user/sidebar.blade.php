<nav class="navbar navbar-default sidebarl" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse navup" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav sideb">
       <li class="tittlesr">@lang('dashboard_user.account')</li>    
       <li class="sideli @if($active=='dashboard') active @endif">
        <a href="{{Url('/account/dashboard')}}" class="sidea">
          <i class="sidei fa fa-tachometer fa-lg"></i>
          <span class="sides sidebar-mini-hide">@lang('dashboard_user.dashboard')</span>
        </a>
      </li>
      <li class="sideli @if($active=='edit-profile') active @endif">
        <a href="{{url('/account/edit-profile')}}" class="sidea">
          <i class="sidei fa fa-pencil-square-o fa-lg"></i>
          <span class="sides sidebar-mini-hide">@lang('dashboard_user.edit_profile')</span>
        </a>
      </li>
      <li class="sideli @if($active=='change-password') active @endif">
        <a href="{{url('/account/change-password')}}" class="sidea">
          <i class="sidei fa fa-unlock-alt fa-lg"></i>
          <span class="sides sidebar-mini-hide">@lang('dashboard_user.change_password')</span>
        </a>
      </li>
      <li><hr class="separate"></li>  
      <li class="tittlesr">@lang('dashboard_user.bookings')</li>    
      <li class="sideli @if($active=='booking-history') active @endif">
        <a href="{{url('/bookings/booking-history')}}" class="sidea">
          <i class="sidei fa fa-book fa-lg"></i>
          <span class="sides sidebar-mini-hide">@lang('dashboard_user.my_bookings')</span>
        </a>
      </li>
      <li class="sideli @if($active=='payments') active @endif">
        <a href="{{url('/bookings/payments')}}" class="sidea">
          <i class="sidei fa fa-credit-card fa-lg"></i>
          <span class="sides sidebar-mini-hide">@lang('dashboard_user.my_payments')</span>
        </a>
      </li>
      <li><hr class="separate"></li>  
    </ul>
  </div>
</div>
</nav>