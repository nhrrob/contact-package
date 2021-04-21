@component('mail::message')
# Contact Us Form

New message received from {{$name}} <br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
