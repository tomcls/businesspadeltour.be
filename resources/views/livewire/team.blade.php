<div class="mt-5">
    <h2 class="text-lg font-bold">Equipe {{$team['number']}}</h2>
    <div class=" grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-8 mt-4">
     <!-- SELECT BOX -->
     <div>
        <div 
        x-data="{
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }
    
                    this.$refs.button.focus()
    
                    this.open = true
                },
                close(focusAfter) {
                    if (! this.open) return
    
                    this.open = false
    
                    focusAfter && focusAfter.focus()
                },
                session: '{{__('signup.select')}}'
            }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']"
            class="relative w-full mt-2">
          <label  id="listbox-label" class="sr-only"> Change published status </label>
          <div class="relative w-full">
            <div class="inline-flex divide-x divide-blue-900 rounded-md shadow-sm w-full">
              <div class="inline-flex divide-x divide-blue-900 rounded-md shadow-sm w-full">
                <div class="inline-flex items-center rounded-l-md border border-transparent bg-dark-blue py-2 pl-3 pr-4 text-white shadow-sm w-full">
                  <!-- Heroicon name: mini/check -->
                  
                  <p class="ml-2.5 text-sm font-medium" x-html="session">{{__('signup.select')}}</p>
                </div>
                <button 
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                  type="button" class="inline-flex items-center rounded-l-none rounded-r-md bg-dark-blue p-2 text-sm font-medium text-white hover:bg-light-blue focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                  <span class="sr-only">Change published status</span>
                  <!-- Heroicon name: mini/chevron-down -->
                  <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </div>
        
            <!--
              Select popover, show/hide based on select state.
        
              Entering: ""
                From: ""
                To: ""
              Leaving: "transition ease-in duration-100"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <ul 
              x-ref="panel"
              x-show="open"
              x-transition.origin.top.left
              x-on:click.outside="close($refs.button)"
              :id="$id('dropdown-button')"
              x-transition:leave="transition ease-in duration-100"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"

              class="absolute right-0 z-10 mt-2 w-72 origin-top-right divide-y divide-gray-200 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
              <!--
                Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
        
                Highlighted: "text-white bg-dark-blue", Not Highlighted: "text-gray-900"
              -->
              @foreach ($sessions as $s)
              <li wire:click="setSession({{$s->id}})"  x-on:click.prevent="session = '{{$s->name}}';toggle()" class="text-gray-900 cursor-default select-none p-4 text-sm" id="listbox-option-0" role="option">
                <div class="flex flex-col">
                  <div class="flex justify-between"  >
                    <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                    <p class="font-normal text-xs">{{$s->name}}: {{$s->startdate}}</p>
                    
                  </div>
                  <!-- Highlighted: "text-indigo-200", Not Highlighted: "text-gray-500" -->
                  <p class="text-gray-500 text-xs">{{$s->club_name}} {{$s->address}}</p>
                </div>
              </li>
              @endforeach
             
              <!-- More items... -->
            </ul>
          </div>
          
        </div>
        @error('team.session') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror

      </div>
      <div>

       <!-- SELECT BOX -->
       <div 
       x-data="{
               open: false,
               toggle() {
                   if (this.open) {
                       return this.close()
                   }
   
                   this.$refs.button.focus()
   
                   this.open = true
               },
               close(focusAfter) {
                   if (! this.open) return
   
                   this.open = false
   
                   focusAfter && focusAfter.focus()
               },
               category: '{{__('signup.selectcategory')}}'
           }"
           x-on:keydown.escape.prevent.stop="close($refs.button)"
           x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
           x-id="['dropdown-button']"
           class="relative w-full mt-2">
         <label  id="listbox-label" class="sr-only"> Change Categorie </label>
         <div class="relative w-full">
           <div class="inline-flex divide-x divide-blue-900 rounded-md shadow-sm w-full">
             <div class="inline-flex divide-x divide-blue-900 rounded-md shadow-sm w-full">
               <div class="inline-flex items-center rounded-l-md border border-transparent bg-dark-blue py-2 pl-3 pr-4 text-white shadow-sm w-full">
                 <!-- Heroicon name: mini/check -->
                 
                 <p class="ml-2.5 text-sm font-medium" x-html="category">{{__('signup.category')}}</p>
               </div>
               <button 
               x-ref="button"
               x-on:click="toggle()"
               :aria-expanded="open"
               :aria-controls="$id('dropdown-button')"
                 type="button" class="inline-flex items-center rounded-l-none rounded-r-md bg-dark-blue p-2 text-sm font-medium text-white hover:bg-light-blue focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-50" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                 <span class="sr-only">Change Categorie</span>
                 <!-- Heroicon name: mini/chevron-down -->
                 <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                   <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                 </svg>
               </button>
             </div>
           </div>
       
           <!--
             Select popover, show/hide based on select state.
       
             Entering: ""
               From: ""
               To: ""
             Leaving: "transition ease-in duration-100"
               From: "opacity-100"
               To: "opacity-0"
           -->
           <ul 
             x-ref="panel"
             x-show="open"
             x-transition.origin.top.left
             x-on:click.outside="close($refs.button)"
             :id="$id('dropdown-button')"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"

             class="absolute right-0 z-10 mt-2 w-72 origin-top-right divide-y divide-gray-200 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
             <!--
               Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.
       
               Highlighted: "text-white bg-dark-blue", Not Highlighted: "text-gray-900"
             -->
             <li wire:click="setCategory('fun')"  x-on:click.prevent="category = '{{__('signup.fun')}}';toggle()" class="text-gray-900 cursor-default select-none p-4 text-sm" id="listbox-option-0" role="option">
               <div class="flex flex-col">
                 <div class="flex justify-between"  >
                   <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                   <p class="font-normal text-xs">{{__('signup.fun')}}</p>
                   <!--
                     Checkmark, only display for selected option.
       
                     Highlighted: "text-white", Not Highlighted: "text-indigo-500"
                   -->
                   <span class="text-blue-500">
                     <!-- Heroicon name: mini/check -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Happy</title><circle cx="184" cy="232" r="24"/><path d="M256.05 384c-45.42 0-83.62-29.53-95.71-69.83a8 8 0 017.82-10.17h175.69a8 8 0 017.82 10.17c-11.99 40.3-50.2 69.83-95.62 69.83z"/><circle cx="328" cy="232" r="24"/><circle cx="256" cy="256" r="208" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                   </span>
                 </div>
               </div>
             </li>
             <li wire:click="setCategory('expert')"  x-on:click.prevent="category = '{{__('signup.expert')}}';toggle()" class="text-gray-900 cursor-default select-none p-4 text-sm" id="listbox-option-0" role="option">
               <div class="flex flex-col">
                 <div class="flex justify-between"  >
                   <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                   <p class="font-normal text-xs">{{__('signup.expert')}}</p>
                   <!--
                     Checkmark, only display for selected option.
       
                     Highlighted: "text-white", Not Highlighted: "text-indigo-500"
                   -->
                   <span class="text-blue-500">
                     <!-- Heroicon name: mini/check -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Ribbon</title><circle cx="256" cy="160" r="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M143.65 227.82L48 400l86.86-.42a16 16 0 0113.82 7.8L192 480l88.33-194.32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M366.54 224L464 400l-86.86-.42a16 16 0 00-13.82 7.8L320 480l-64-140.8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="160" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                   </span>
                 </div>
               </div>
             </li>
             <li wire:click="setCategory('pro')"  x-on:click.prevent="category = '{{__('signup.pro')}}';toggle()" class="text-gray-900 cursor-default select-none p-4 text-sm" id="listbox-option-0" role="option">
               <div class="flex flex-col">
                 <div class="flex justify-between"  >
                   <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                   <p class="font-normal text-xs">{{__('signup.pro')}}</p>
                   <!--
                     Checkmark, only display for selected option.
       
                     Highlighted: "text-white", Not Highlighted: "text-indigo-500"
                   -->
                   <span class="text-blue-500">
                     <!-- Heroicon name: mini/check -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Ribbon</title><circle cx="256" cy="160" r="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M143.65 227.82L48 400l86.86-.42a16 16 0 0113.82 7.8L192 480l88.33-194.32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M366.54 224L464 400l-86.86-.42a16 16 0 00-13.82 7.8L320 480l-64-140.8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="160" r="64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                   </span>
                 </div>
               </div>
             </li>
             <!-- More items... -->
           </ul>
         </div>
         
       </div>
       @error('team.category') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror

      </div>
    </div>
    <div class=" grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-8 mt-4">
        <div>
            <div>
              <label class="block text-md font-medium text-gray-700 mb-2">{{__('signup.playerone')}}</label>
              <label for="playerOneFirstname" class="block text-sm font-medium text-gray-900">{{__('signup.firstname')}}</label>
              <div class="mt-1">
                <input wire:model="team.playerOneFirstname" type="text" name="playerOneFirstname" id="playerOneFirstname" autocomplete="given-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('team.playerOneFirstname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
            <div>
              <label for="playerOneLastname" class="block text-sm font-medium text-gray-900">{{__('signup.lastname')}}</label>
              <div class="mt-1">
                <input wire:model="team.playerOneLastname" id="playerOneLastname" name="playerOneLastname" type="text" autocomplete="family-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('team.playerOneLastname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
            <div>
              <label for="playerOneEmail" class="block text-sm font-medium text-gray-900">Email</label>
              <div class="mt-1">
                <input wire:model="team.playerOneEmail" id="playerOneEmail" name="playerOneEmail" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('team.playerOneEmail') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
            <div>
              <label for="playerOneSize" class="block text-sm font-medium leading-6 text-gray-900">{{__('signup.size')}}</label>
              <select id="playerOneSize" name="playerOneSize" wire:model="team.playerOneSize" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option >{{__('signup.selectsize')}}</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
              </select>
              @error('team.playerOneSize') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
            </div>
        </div>
    
        <div>
            <div>
              <label class="block text-md font-medium text-gray-700 mb-2">{{__('signup.playertwo')}} </label>
              <label for="playerTwoFirstname" class="block text-sm font-medium text-gray-900">{{__('signup.firstname')}}</label>
              <div class="mt-1">
                <input wire:model="team.playerTwoFirstname" type="text" name="playerTwoFirstname" id="playerTwoFirstname" autocomplete="given-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('team.playerTwoFirstname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
            <div>
              <div class="flex justify-between">
                <label for="playerTwoLastname" class="block text-sm font-medium text-gray-900">{{__('signup.lastname')}}</label>
              </div>
              <div class="mt-1">
                <input wire:model="team.playerTwoLastname" type="text" name="playerTwoLastname" id="playerTwoLastname" autocomplete="family-name" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500" aria-describedby="phone-optional">
                @error('team.playerTwoLastname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
            <div>
              <div class="flex justify-between">
                <label for="playerTwoEmail" class="block text-sm font-medium text-gray-900">Email</label>
              </div>
              <div class="mt-1">
                <input wire:model="team.playerTwoEmail" type="text" name="playerTwoEmail" id="playerTwoEmail" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500" aria-describedby="phone-optional">
                @error('team.playerTwoEmail') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
              </div>
            </div>
            <div>
              <label for="playerTwoSize" class="block text-sm font-medium leading-6 text-gray-900">{{__('signup.size')}}</label>
              <select id="playerTwoSize" name="playerTwoSize" wire:model="team.playerTwoSize" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option >{{__('signup.selectsize')}}</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
              </select>
              @error('team.playerTwoSize') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
            </div>
          </div>
    </div>
    
</div>