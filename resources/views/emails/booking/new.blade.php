@component('mail::message')
# Booking

Name: {{$booking->user->name}}</br>
email: {{$booking->user->email}}</br>
Price: {{$booking->price}}</br>
Status: {{$booking->status}}</br>


@if($booking->note <> '')
    @component('mail::panel')
    Note: {{$booking->note}}
    @endcomponent
@endif



# Booking details

@component('mail::table')
| Product     | Quantity    | Type  | Nigths | Rooms |
| :---------: |:-----------:| :----:| :-----:| :----:|
@foreach($booking->details as $item)
    | {{$item->name}}  | {{$item->quantity}} | @if($item->type == 0)Paquete @elseif($item->type == 1)Actividad @elseif($item->type == 2)Hotel @elseif($item->type == 4)Servicio Adicional @endif | {{$item->nights}} | {{$item->nights}}
@endforeach

@endcomponent

# Contacts details

@component('mail::table')
| Name     | Email       | Age  | Country | Type |
| :--------: |:-----------:| :---:| :------:| :----:|
@foreach($booking->contacts as $item)
    | {{$item->name}}  | {{$item->email}} |{{$item->age}} | {{$item->country}} |   @if($item->type == 0)
        <span class="badge badge-primary">Adult</span>
    @elseif($item->type == 1)
        <span class="badge badge-success">Child</span>
    @elseif($item->type == 2)
        <span class="badge badge-danger">Infant</span>
    @endif |
@endforeach

@endcomponent

@component('mail::button', ['url' => url('bookings/booking-history')])
See Booking
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
