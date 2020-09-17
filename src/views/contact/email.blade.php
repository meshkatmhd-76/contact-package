@component('mail::message')
# Introduction

There is new message from  {{$request->name}}
<br>
Message:
{{$request->message}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
