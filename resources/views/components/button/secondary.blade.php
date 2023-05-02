
@props([
    'color' => '',
    'size' => 'text-sm'
])
<x-button {{ $attributes->merge(['class' => 'mt-3 border-2'])}}  size="{{$size}}" color="{{$color}}">
    {{$slot}}
</x-button>