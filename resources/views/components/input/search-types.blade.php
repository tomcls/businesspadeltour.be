@props([
    'name' => null,
    'types' => null,
    'option' => null,
    'noCheckForMobile' => null,
])
<div x-data="{ 
        isOpen: false,
      }">
    <div class="relative">
      <button {{$attributes}} @click.inside="isOpen = true" type="button"  aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
        <span class="block truncate ">{{$name ?? ' '}}</span>
        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
          <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
          </svg>
        </span>
      </button>
      <ul style="display: none" x-show="isOpen" @click.outside="isOpen = false" :class="{'bottom-11': mobileCheck({{$noCheckForMobile}}) === true}" class="absolute z-20 mt-1 max-h-72 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm " tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
        
        @if ($option)
        {{$option}}
        @endif
        @foreach ($types as $key => $item)
          <li @click="isOpen = false" wire:click="$emit('setType', {{$item}})" class="hover:bg-gray-200 cursor-pointer text-gray-900 relative  select-none py-2 {{!empty($item->translation->holiday_type_id)?'pl-8':'pl-2'}} pr-4" id="listbox-option-0" role="option">
            <span class="font-normal block truncate hover:text-blue-600 pl-2">{{$item->translation->name}} </span>
            @if (!empty($item->translation->holiday_type_id))
            <span class="text-blue-500 absolute inset-y-0 left-0 flex items-center pl-1.5">
              @if ($item->code == 'circuit')
              <x-icon.map2 />
              @endif
              @if ($item->code == 'cruise')
              <x-icon.boat />
              @endif
              @if ($item->code == 'club')
              <x-icon.palm />
              @endif
              @if ($item->code == 'citytrip')
              <x-icon.hotel />
              @endif
              @if ($item->code == 'autotour')
              <x-icon.car />
              @endif
              @if ($item->code == 'combine')
              <x-icon.combined />
              @endif
            </span>
            @endif
          </li>
        @endforeach
      </ul>
    </div>
  </div>