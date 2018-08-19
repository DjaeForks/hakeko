@component('mail::message')
# Hey admin

- {{$msg->name}}
-

@component('mail::panel')
-{{$msg->message}}
{{$msg->f1}}
{{$msg->f2}}
{{$msg->f3}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
