@if(count($bookings)==0)
<p>@lang('dashboard_user.notbookings')</p>
@else
<div class="table-responsive">
 <table class="table table-bordered">
  <thead>
    <th class="thtb">@lang('dashboard_user.date')</th>
    <th class="thtb">@lang('dashboard_user.status')</th>
    <th class="thtb">@lang('dashboard_user.price')</th>
    <th class="thtb thactions">@lang('dashboard_user.actions')</th>
  </thead>
  <tbody>
    @foreach($bookings as $booking)
    <tr>
      <td>{{$booking->created_at}}</td>
      <td>{{$booking->status}}</td>
      <td>{{$booking->price}}</td>
      <td>
       <button class="js-swal-confirm btn btn-xs btn btn-orange" data-id="{{ $booking->id }}" type="button">@lang('dashboard_user.view_details')
       </button>
     </td>
   </tr>
   @endforeach
 </tbody>
</table>
<div>{!! str_replace('/?','?',$bookings->render()) !!}</div>
</div>
@endif
@include('layouts.user.partials._sweetalert', ['type'=> 'bookings'])
