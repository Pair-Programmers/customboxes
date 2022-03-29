@component('mail::message')
# New Order/Qoute

your have recieved new qoute. <br>

<br> Form : {{$form}}
<br> Page_url : {{$page_url}}
<br> Product : {{$product}}
<br> Industry : {{$industry}}
<br> Dimensions : {{$dimensions}}
<br> Unit : {{$unit}}
<br> Material : {{$material}}
<br> Color : {{$color}}
<br> Qty1 : {{$qty1}}
<br> Qty2 : {{$qty2}}
<br> Addons : {{$addons}}
<br> Customer Name : {{$customer_name}}
<br> Customer Email : {{$customer_email}}
<br> Customer Phone : {{$customer_phone}}
<br> Customer Note : {{$customer_note}}
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
