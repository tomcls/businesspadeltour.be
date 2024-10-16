@props([
    'model' => null,
    'onChange' => null,
    'label' => __('Select file'),
])
{{--
-- Important note:
--
-- This template is based on an example from Tailwind UI, and is used here with permission from Tailwind Labs
-- for educational purposes only. Please do not use this template in your own projects without purchasing a
-- Tailwind UI license, or they’ll have to tighten up the licensing and you’ll ruin the fun for everyone.
--
-- Purchase here: https://tailwindui.com/
--}}

<div class="flex items-center">
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span class="ml-5 rounded-md shadow-sm">
            <input  @focus="focused = true; console.log('focus')" @blur="focused = false; console.log('blur');"  class="sr-only" type="file" {{ $attributes }} wire:model='{{$model}}' wire:change.debounce.450ms='$emit("upload")'>
            <label for="{{ $attributes['id'] }}" :class="{ 'outline-none border-blue-300 shadow-outline-blue': focused }" class="text-center inline-block rounded-md bg-blue-800 px-3.5 py-2 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                {{$label}}
            </label> 
        </span>
    </div>
</div>
