@props([
    'name' => null,
    'rows' => null,
    'option' => null,
])
<div x-data="{ 
        isOpen: false,
      }">
    <div class="relative w-80">
      <button {{$attributes}} @click.inside="isOpen = true" type="button"  aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
        <span class="block truncate ">{{$name ?? ' '}}</span>
        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
          <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
          </svg>
        </span>
      </button>
      <ul x-show="isOpen" @click.outside="isOpen = false" class="absolute z-20 mt-1 max-h-72 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
        
        @if ($option)
        {{$option}}
        @endif
        @foreach ($rows as $key => $row)
          <li @click="isOpen = false" wire:click="$emit('setType', 'ee')" class="w-80 hover:bg-gray-200 cursor-pointer text-gray-900 relative  select-none py-2 pl-2 pr-4" id="listbox-option-0" role="option">
            
            <span class="font-normal block truncate hover:text-blue-600 pl-2">{{$row->title}}Nuits</span>
          </li>
        @endforeach
      </ul>
    </div>
  </div>