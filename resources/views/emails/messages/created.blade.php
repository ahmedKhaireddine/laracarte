@component('mail::message')
# Message de la part {{ $msg->name }}

Email : {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
