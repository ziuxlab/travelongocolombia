<div class="block block-bordered block-rounded">
    <div class="block-header">
        <h3 class="block-title">@lang('dashboard_user.payment_history')</h3>
    </div>
    <div class="block-content  block-content-full">
        @if(count($bookings_payments)==0)
            <p>@lang('dashboard_user.notbookings')</p>
        @else
            <div class="table-responsive">
                <table class="table  table-bordered">
                    <thead>
                    <th class="">@lang('dashboard_user.date')</th>
                    <th class="text-center">@lang('dashboard_user.status')</th>
                    <th class="text-center">@lang('dashboard_user.value')</th>
                    </thead>
                    <tbody class="">
                    @foreach($bookings_payments as $booking)
                        <tr>
                            <td class="">{{$booking->created_at}}</td>
                            <td class="font-w600 text-center text-success">${{number_format($booking->value) }}</td>
                            <td class="text-center">{{$booking->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>{{$bookings_payments->render()}}</div>
            </div>
        @endif
    </div>
</div>
