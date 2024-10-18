
<div class="space-y-10  px-10">
    
    <div class="text-center pt-10 max-w-7xl mx-auto">

        <h2 class="pb-10 animate-fadein color-dark-blue text-pretty  font-medium tracking-tight text-4xl sm:text-6xl">{{__('Arenal/Tero event subscription')}}</h2>
        <p class="pt-4 text-pretty text-slate-700">
            {!!__("Dear partner, It gives us great pleasure to invite you to the launch of the 2025 season of Belgium's biggest inter-company Padel competition: <b>the Vertuoza Padel Tour</b>.  We offer you a unique opportunity to measure yourself against other companies on the Padel courts, while developing your professional network, all in a dynamic and relaxed atmosphere.")!!}
        </p>
        <p class="pt-4 text-pretty text-lg color-dark-blue font-bold">{{__("And that's not all!")}} </p>
        <p class="pt-4 text-pretty text-slate-700">
            {!!__("Right after the presentation, a little Padel tournament to give you a taste of the 2025 season!  Participation in the tournament costs 50 Eur per team and is fully refundable if you register for a 2025 session of the Vertuoza Padel Tour.")!!}
        </p>

    </div>
    <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3 ">
      <div class="px-4 sm:px-0">
        <h2 class="pb-3 animate-fadein color-dark-blue text-pretty  font-medium tracking-tight text-4xl sm:text-xl">{{__('Two kick-off sessions are planned')}}</h2>
        <p class="mt-1 text-sm leading-6 color-dark-blue py-4 font-semibold">{{__('Arenal Bruges program - November 8')}}</p>
        <ul class="mt-1 text-sm leading-6 text-gray-600 space-y-3">
            <li><x-icon.right class="w-3 h-3 text-blue-600" />17h00: {{__('Welcoming participants')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />17h15: {{__('Introducing the Vertuoza Padel Tour 2025')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />17h45: {{__('Tournament briefing')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />18h00: {{__('Start of tournament')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />22h00: {{__('End of tournament and closing drink')}}</li>
        </ul>
        <p class="mt-1 text-sm leading-6 color-dark-blue py-4 font-semibold">{{__('Tero Waterloo program - November 13')}}</p>
        <ul class="mt-1 text-sm leading-6 text-gray-600 space-y-3">
            <li><x-icon.right class="w-3 h-3 text-blue-600" />13h00: {{__('Welcoming participants')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />13h15: {{__('Introducing the Vertuoza Padel Tour 2025')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />13h45: {{__('Tournament briefing')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />14h00: {{__('Start of tournament')}}</li>
            <li><x-icon.right class="w-3 h-3 text-blue-600" />17h30: {{__('End of tournament and closing drink')}}</li>
        </ul>
      </div>
      <form class="bg-white max-w-2xl shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2" wire:submit.prevent="validateCompany"  >
        <div class="px-4 py-6 sm:p-8">
          <div class="grid max-w-2xl grid-cols-1 gap-x-6 sm:gap-y-8  gap-y-2 sm:grid-cols-6">
            <div class="sm:col-span-3">
              <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">{{__('Firstname')}}</label>
              <div class="mt-2">
                <input type="text" wire:model="user.firstname" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                @error('user.firstname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
  
            <div class="sm:col-span-3">
              <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">{{__('Lastname')}}</label>
              <div class="mt-2">
                <input type="text" wire:model="user.lastname" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                @error('user.lastname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
  
            <div class="sm:col-span-3">
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{__('Email address')}}</label>
              <div class="mt-2">
                <input id="email" wire:model="user.email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                @error('user.email') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
            <div class="sm:col-span-3">
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">{{__('Phone')}}</label>
              <div class="mt-2">
                <input id="phone" wire:model="user.phone" name="phone" type="text" autocomplete="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                @error('user.phone') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
  
            <div class="sm:col-span-3">
                <label for="companyName" class="block text-sm font-medium leading-6 text-gray-900">{{__('Company name')}}</label>
                <div class="mt-2">
                  <input type="text" wire:model="company.name" name="companyName" id="companyName" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                  @error('company.name') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="companyVAT" class="block text-sm font-medium leading-6 text-gray-900">{{__('Company VAT')}}</label>
                <div class="mt-2">
                  <input type="text" wire:model="company.vat" name="companyVAT" id="companyVAT" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  @error('company.vat') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="sm:col-span-3">
              <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">{{__('Address')}}</label>
              <div class="mt-2">
                <input type="text" wire:model="company.address" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('company.address') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
  
            <div class="sm:col-span-1">
              <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">{{__('Zip')}}</label>
              <div class="mt-2">
                <input type="text" wire:model="company.zip"  name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('company.zip') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">{{__('City')}}</label>
                <div class="mt-2">
                    <input type="text" wire:model="company.city"  name="city" id="city" autocomplete="city" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('company.city') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                </div>
            </div>
            
          </div>
          <div class="sm:col-span-full pt-3">
            <div class="relative flex items-start">
                <div class="flex h-6 items-center">
                  <input  id="event" aria-describedby="event-description" name="event" wire:model="eventId" value='1' checked type="radio" class="h-4 w-4 rounded-full border-gray-300 text-blue-600 focus:ring-blue-600">
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label for="event" class="font-medium text-gray-900">{{__('I would like to take part in the event at Arenal but I do not wish to take part in the padel tournament.')}}</label>
                  <p id="event-description" class="text-gray-500">{{__('Arenal Bruge, November 8 from 17.00')}}</p>
                </div>
              </div>
        </div>
        <div class="sm:col-span-full">
            <div class="relative flex items-start">
                <div class="flex h-6 items-center">
                  <input  id="padel-event-1" aria-describedby="padel-event-1-description" name="event" wire:model="eventId" value='2' type="radio" class="h-4 w-4 rounded-full border-gray-300 text-blue-600 focus:ring-blue-600">
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label for="padel-event-1" class="font-medium text-gray-900">{{__('I would like to take part in the event at the Tero but I do not wish to take part in the padel tournament.')}}</label>
                  <p id="padel-event-1-description" class="text-gray-500">{{__('Tero Waterloo, November 13 from 13.00')}}</p>
                </div>
              </div>
        </div>
        <div class="sm:col-span-full">
            <div class="relative flex items-start">
                <div class="flex h-6 items-center">
                  <input  id="drink-event-2" aria-describedby="drink-event-2-description" name="event" wire:model="eventId" value='3' type="radio" class="h-4 w-4 rounded-full border-gray-300 text-blue-600 focus:ring-blue-600">
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label for="drink-event-2" class="font-medium text-gray-900">{{__('I would like to take part in the Arenal event and the padel tournament')}}</label>
                  <p id="drink-event-2-description" class="text-gray-500">{{__('Arenal Bruge, November 8 from 17.00')}}</p>
                </div>
              </div>
        </div>
        <div class="sm:col-span-full">
            <div class="relative flex items-start">
                <div class="flex h-6 items-center">
                  <input  id="padel-event-2" aria-describedby="padel-event-2-description" name="event" wire:model="eventId" value='4' type="radio" class="h-4 w-4 rounded-full border-gray-300 text-blue-600 focus:ring-blue-600">
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label for="padel-event-2" class="font-medium text-gray-900">{{__('I would like to take part in the Tero event and the padel tournament')}}</label>
                  <p id="padel-event-2-description" class="text-gray-500">{{__('Tero Waterloo, November 13 from 13.00')}}</p>
                </div>
              </div>
        </div>

        <div class="col-span-4 {{$eventId == 3 || $eventId==4 ? '': 'hidden'}}">
            <label for="totalTeam" class="block text-sm font-medium leading-6 text-gray-900">{{__('Number of teams')}}</label>
            <div class="mt-2">
              <input type="text" wire:model="totalTeam" name="totalTeam" id="totalTeam" autocomplete="totalTeam" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>
        <div class="flex items-center justify-center gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <div {{$eventId == 3 || $eventId==4 ? '': 'hidden'}}>
                <span>{{__('Total incl. VAT')}}</span> 
                <span class="font-black">{{($price??1) * (intval($totalTeam)??1) * 1.21}}€</span> 
            </div>
          <button type="submit" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">{{__('Confirm')}}</button>
        </div>
      </form>
    </div>
  </div>
  