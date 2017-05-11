<div class="block block-bordered block-rounded">
    <div class="block-header">
        <h3 class="block-title">@lang('dashboard_user.booking_history')</h3>
    </div>
    <div class="block-content  block-content-full">
        @if(count($bookings)==0)
            <p>@lang('dashboard_user.notbookings')</p>
        @else
            <div class="table-responsive">
                @foreach($bookings as $booking)
                    <table class="table  table-bordered">
                        <thead>
                        <th class="">@lang('dashboard_user.date')</th>
                        <th class="text-center">@lang('general.Adults')</th>
                        <th class="text-center">@lang('general.children')</th>
                        <th class="text-center">@lang('general.infants')</th>
                        <th class="text-center">@lang('dashboard_user.price')</th>
                        <th class="text-center">@lang('dashboard_user.status')</th>
                        </thead>
                        <tbody class="">
                        <tr>
                            <td class="">{{$booking->created_at}}</td>
                            <td class="text-center">{{count($booking->contacts->where('type',0))}}</td>
                            <td class="text-center">{{count($booking->contacts->where('type',1))}}</td>
                            <td class="text-center">{{count($booking->contacts->where('type',2))}}</td>
                            <td class="font-w600 text-center text-success">${{number_format($booking->price) }}</td>
                            <td class="text-center">{{$booking->status}}</td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <table class="table remove-margin-b table-bordered table-condensed">
                                    <thead>
                                    <tr>
                                        <td class="font-w600">Product</td>
                                        <td class="font-w700 text-center">Quantity</td>
                                        <td class="font-w700 text-center">type</td>
                                        <td class="text-center">@lang('general.night')</td>
                                        <td class="text-center">@lang('general.rooms')</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($booking->details as $item)
                                        <tr>
                                            <td class="font-w600 ">{{$item->name}}</td>
                                            <td class="font-w600 text-center">{{$item->quantity}}</td>
                                            <td class="font-w600 text-center">
                                                @if($item->type == 0)
                                                    <span class="badge badge-primary">Paquete</span>
                                                @elseif($item->type == 1)
                                                    <span class="badge badge-success">Actividad</span>
                                                @elseif($item->type == 2)
                                                    <span class="badge badge-danger">Hotel</span>
                                                @elseif($item->type == 4)
                                                    <span class="badge badge-default">Servicio Adicional</span>
                                                @endif
                                            </td>
                                            <td class="text-center"><span class="badge badge-danger">{{$item->nights}}</span></td>
                                            <td class="text-center"><span class="badge badge-success">{{$item->bed}}</span></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </td>
                           
                        </tr>
                        </tbody>
                    
                    </table>
                @endforeach
                <div>{{$bookings->render()}}</div>
            </div>
        @endif
    </div>
</div>
