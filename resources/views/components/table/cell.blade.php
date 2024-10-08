@props(['py','px'])

@php
$py = $py ?? 'py-4';
$px = $px ?? 'px-4';
@endphp
<td {{ $attributes->merge(['class' => $px.' '.$py.' whitespace-no-wrap text-sm leading-5 text-cool-gray-900']) }}>
    {{ $slot }}
</td>