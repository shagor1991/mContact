@component('mail::message')
# Introduction

The body of your message.
There is a new message: <br>
{{ $contact_data->message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
