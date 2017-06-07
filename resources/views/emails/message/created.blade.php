@component('mail::message')
# Hey

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
