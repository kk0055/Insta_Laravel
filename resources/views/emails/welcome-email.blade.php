@component('mail::message')
# Welcome to Insta


This is a community of developers.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

All the best,<br>
{{ config('app.name') }}
@endcomponent
