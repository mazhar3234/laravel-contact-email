@component('mail::message')
# Introduction
{{ $firstName.' '.$lastName}} Wants to say,
<br>
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
