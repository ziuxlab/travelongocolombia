<div class="block block-bordered block-rounded">
    <div class="block-header">
        <h3 class="block-title">@lang('dashboard_user.profile')</h3>
    </div>
    <div class="block-content  block-content-full">
        <div class="row flex-center">
            <!-- user image -->
            <div class=" col-xs-4 flex-center">
                <img height="120px" alt="User Pic"
                     src="@if(Auth::user()->img !=null) {{asset(Auth::user()->img)}} @else {{asset('img/default.png')}} @endif"
                     >
            </div>
            <!-- end user image -->
            <!-- user info -->
            <div class=" col-xs-8">
                {!! Form::open() !!}
                <div class="row">
                    <label class="col-xs-4 control-label">@lang('dashboard_user.name')
                        :</label>
                    <div class="col-xs-8">{{Auth::user()->name}}</div>
                </div>
                <div class="row">
                    <label class="col-xs-4 control-label">@lang('dashboard_user.email')
                        :</label>
                    <div class="col-xs-8">{{Auth::user()->email}}</div>
                </div>
                <div class="row">
                    <label class="col-xs-4 control-label">@lang('dashboard_user.last_connection')
                        :</label>
                    <div class="col-xs-8">11/01/2017 22:08</div>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- end user info -->
        </div>
    
    </div>
</div>