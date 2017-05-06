@component('mail::message')
# Introduction

The body of your message.

- one
- two
- three

@component('mail::button', ['url' => 'http://amagiddmxh.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quote to go here. :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
