@component('mail::message')
# Introduction


Thank you {{ $order->name }}.  We just shipped {{ $order->item_count }} items.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
