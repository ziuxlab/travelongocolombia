@component('mail::message')
# Wellcome to travelongo


Name: {{ $user->name }}</br>

Email: {{ $user->email }}</br>

## Your password

@component('mail::panel')
Password: {{$password}}
@endcomponent


@endcomponent


