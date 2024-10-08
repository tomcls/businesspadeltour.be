
@props([
    'isOpen' => null,
    'locationPanelIsOpen' => null,
    'wireModel' => null,
    'rows' => null,
    'icon' => null,
    'noCheckForMobile' => null,
    'trailingAddOn' => false,
    'countries' => [],
    'routeName' => null
])
<div>

<div x-data="{ isOpen: @entangle('isOpen'), isPanelOpen: @entangle('locationPanelIsOpen') }" >
    <div class="relative  rounded-md shadow-sm">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 z-10">
            <x-icon.search class="text-vwblue" />
        </div>
        <input 
            {{ $attributes->merge(['class' => 'block w-full rounded-md border-0 py-2.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-base placeholder:text-gray-600 focus:ring-2 focus:ring-inset focus:ring-vwblue sm:text-sm sm:leading-6'  ])}}
            type="text" 
            placeholder="Find a location">
        @if ($trailingAddOn)
            {{$trailingAddOn}}
        @endif
      <input type="hidden" wire:model="{{$wireModel}}" />
        <div :class="{'bottom-11': mobileCheck({{$noCheckForMobile}}) === true}" class=" absolute sm:left-0 z-30 mt-3  sm:max-w-md transform px-0 {{$routeName ? '-mx-6':''}} w-screen ">
            <div x-show="isOpen"
                @click.outside="isOpen = false"
                class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 inset-0"
                style="display: none">
                    @foreach($rows as $row)
                    @if(isset($row['id']))
                    <button wire:click="$emit('selectAutoCompleteItem','{{htmlspecialchars($row['title'], ENT_QUOTES);}}','{{$row['id']}}','{{$row['type']}}')" 
                        x-on:click.prevent="isOpen = false;" 
                        class="w-full  relative grid gap-6 bg-white pl-2 py-2 sm:gap-2  hover:bg-gray-200 border-b border-b-gray-200" >
                            <div class=" w-full flex items-start px-3 py-1   ">
                                @if (isset($row['image']))
                                    <img src="/{{$row['type']=='house'?'houses':'holidays'}}/images/{{$row['id']}}/small_{{$row['image']}}" class="h-12 w-12 rounded" />
                                @else
                                    {{$icon}}
                                @endif
                                <div class="px-2">
                                    <h2 class="text-sm font-medium text-gray-900 text-left truncate w-72 sm:w-80 pr-2">{{$row['title']}}</h2>
                                    <p class="mt-1 text-sm text-gray-500 text-left">{{$row['subtitle']}}</p>
                                </div>
                            </div>
                    </button>
                    @endif
                    @endforeach
            </div>
        </div>
        {{-- <div 
            x-show="isPanelOpen"
            x-data="{
            tab: 'continent'
            }"
            @click.outside="isPanelOpen = false"

            :class="{'bottom-11': mobileCheck({{$noCheckForMobile}}) === true}" class="absolute left-0 z-20 mt-3 w-screen max-w-md transform px-2 sm:px-0 "
            style="display: none"
            >

            <div
                class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select a tab</label>
                        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                        <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            <option>Continent</option>
                            <option>Countries</option>
                        </select>
                    </div>
                    <div class="hidden sm:block bg-white">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex" aria-label="Tabs">
                        <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <a x-on:click="tab='continent'" href="#" :class="tab==='continent' ? 'border-vwblue text-sky-600 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium'" >Continent</a>
                        <a @click="tab='countries'" href="#" :class="tab==='countries' ? 'border-vwblue text-sky-600 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium'">Pays</a>
                        </nav>
                    </div>
                    </div>
                <div :class="tab==='continent' ? '' : 'hidden'">
                    <div  class="grid grid-cols-3 bg-white gap-x-2 gap-y-2 py-4 px-4">
                        <button class="border border-gray-200 rounded-md px-4 py-3 hover:border-vwblue hover:bg-gray-100">
                            Europe
                        </button>
                            <button class="border border-gray-200 rounded-md px-4 py-3 hover:border-vwblue hover:bg-gray-100">
                            Afrique
                        </button>
                            <button class="border border-gray-200 rounded-md px-4 py-3 hover:border-vwblue hover:bg-gray-100">
                            Asie
                        </button>
                            <button class="border border-gray-200 rounded-md px-4 py-3 hover:border-vwblue hover:bg-gray-100">
                            Amerique du nord
                        </button>
                            <button class="border border-gray-200 rounded-md px-4 py-3 hover:border-vwblue hover:bg-gray-100">
                            Amerique du sud
                        </button>
                            <button class="border border-gray-200 rounded-md px-4 py-3 hover:border-vwblue hover:bg-gray-100">
                            Oceanie
                        </button>
                    </div>
                </div>
                <div :class="tab==='countries' ? '' : 'hidden'" class="max-h-56 overflow-y-scroll">
                    <div  class="grid grid-cols-2 bg-white gap-x-2 gap-y-2 py-4 px-4 ">
                        @foreach ($countries as $country)
                            <button @click="isPanelOpen = !isPanelOpen" wire:click="$emit('selectAutoCompleteItem','{{'#'.$country->country_id.' '.$country->name}}','{{$country->country_id}}','country')" class="border border-gray-200 rounded-md px-4 py-3 hover:border-vwblue hover:bg-gray-100">
                                {{$country->name}}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
  </div>
</div>