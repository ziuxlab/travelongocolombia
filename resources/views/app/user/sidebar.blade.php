<div class="block  block-bordered block-rounded">
    <div class="block-header bg-gray-lighter">
        <h3 class="h5">@lang('dashboard_user.account')</h3>
    </div>
    <div class="list-group remove-margin-b">
        <a href="{{Url('/account/dashboard')}}" class="list-group-item  h5">
            <i class="fa fa-tachometer fa-lg push-10-r"></i>@lang('dashboard_user.dashboard')
        </a>
        <a href="{{url('/account/edit-profile')}}" class="list-group-item  h5">
            <i class="fa fa-pencil-square-o fa-lg push-10-r"></i>@lang('dashboard_user.edit_profile')
        </a>
        <a href="{{url('/account/change-password')}}" class="list-group-item  h5">
            <i class="fa fa-unlock-alt fa-lg push-10-r"></i>@lang('dashboard_user.change_password')
        </a>
        <a href="{{url('/bookings/booking-history')}}" class="list-group-item  h5">
            <i class="fa fa-book fa-lg push-10-r"></i>@lang('dashboard_user.my_bookings')
        </a>
        <a href="{{url('/bookings/payments')}}" class="list-group-item  h5">
            <i class="fa fa-credit-card fa-lg push-10-r"></i>@lang('dashboard_user.my_payments')
        </a>
    </div>
</div>