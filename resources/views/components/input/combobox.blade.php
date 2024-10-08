
@props([
    'wireModel' => null,
    'rows' => null,
    'icon' => null,
    'trailIcon' => null,
])
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div x-data="{ isOpen: false }">
    <div class="relative mt-2">
      <input @click.inside="isOpen = true" 
      id="combobox" 
      type="text" 
      {{ $attributes->merge(['class' => 'w-full rounded-md border-0 bg-white py-1.5 pl-3 pr-12 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6']) }}
       role="combobox" 
       aria-controls="options"
        aria-expanded="false">
      <button type="button" class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <input type="hidden" wire:model="{{$wireModel}}" />
      @if($rows)
      <ul x-show="isOpen" @click.outside="isOpen = false" class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" id="options" role="listbox">
        @foreach($rows as $row)
            @if(isset($row->title))
            <li wire:click="$emit('selectComboBoxItem','{{$wireModel}}','{{htmlspecialchars($row->title, ENT_QUOTES)}}','{{($row->id ?? null)}}')" 
                x-on:click.prevent="isOpen = false;" 
                class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900" id="option-0" role="option" tabindex="-1" >
                    @if (!empty($row->image))
                        <img src="{{$row->image}}" class="h-12 w-12 rounded" />
                    @else
                        {{$icon}}
                    @endif
                    <span class="block truncate">{{htmlspecialchars_decode($row->title??null)}}</span>
            </li>
            @endif
        @endforeach
      </ul>
      @endif
    </div>
  </div>
  