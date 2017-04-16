  @if(count($bookings_payments)==0)
  <p>@lang('dashboard_user.notpayments')</p>
  @else
  <div class="table-responsive">
   <table class="table table-bordered">
    <thead>
      <th class="thtb">@lang('dashboard_user.date')</th>
      <th class="thtb">@lang('dashboard_user.status')</th>
      <th class="thtb">@lang('dashboard_user.value')</th>
    </thead>
    <tbody>
      @foreach($bookings_payments as $booking)
      @foreach($booking->payments as $payment)
      @if($payment!=null)
      <tr>
        <td>{{$payment->created_at}}</td>
        <td>{{$payment->status}}</td>
        <td>{{$payment->value}}</td>
     </tr>
     @endif
     @endforeach
     @endforeach
   </tbody>
 </table>
</div>
@endif
@include('layouts.user.partials._sweetalert', ['type'=> 'payments'])

