@component('mail::message')
# Hello from Wilyanto

Your Personal Tank Carry.

@component('mail::button', ['url' => ''])
Ranked
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
