<div class="bg-white py-24 sm:py-32" id="price">
  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-pretty text-5xl font-medium tracking-tight text-gray-950 sm:text-6xl">{{__('How much is the registration?')}}</h2>
    <p class="mt-6 max-w-3xl text-xl font-medium text-gray-600 sm:text-2xl">{{__('Since the launch of the Vertuoza Padel Tour, we have strived to offer quality events on a reasonable budget, and in 2025, thanks to the renewed support of our partners and sponsors, our prices will once again remain unchanged.')}}</p>
    <p class="mt-6 font-medium leading-8 text-gray-500 "><b>{{__('In addition, each registration registered and paid before December 31, 2024 automatically entitles the holder to a 10% discount on the price.')}}</b></p>
    <p class="text-center pt-10">
      <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  class="inline-block rounded-full border-blue-900 border bg-white px-3.5 py-3 text-center text-base font-semibold text-blue-900 shadow-sm hover:bg-blue-900 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
        {{__("It's Christmas before time, I'm in!")}}
        <x-icon.right class="h-4"/>
      </a>
    </p>
  </div>
  <div class="relative pt-16 sm:pt-24">
    <div class="absolute inset-x-0 bottom-0 top-48 bg-[radial-gradient(circle_at_center_var(--gradient-position),#7775D6,#25243d,#030712_70%)] [--gradient-position:center] lg:[--gradient-position:150%]"></div>
    <div class="relative mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
      <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">
        <div class="-m-2 grid grid-cols-1 rounded-[2rem] shadow-[inset_0_0_2px_1px_#ffffff4d] ring-1 ring-black/5 max-lg:mx-auto max-lg:w-full max-lg:max-w-md">
          <div class="grid grid-cols-1 rounded-[2rem] p-2 shadow-md shadow-black/5">
            <div class="rounded-3xl bg-white p-10 pb-9 shadow-2xl ring-1 ring-black/5">
              <h2 class="text-sm/5 font-semibold text-blue-800">{{__('One session')}}</h2>
              <p class="mt-2 text-pretty text-sm/6 text-gray-600">{{__('Per team')}}</p>
              <div class="mt-8 flex items-center gap-4">
                <div class="text-5xl font-medium text-gray-950">250</div>
                <div class="text-sm/5 text-gray-600">
                  <p>EUR</p>
                  <p>HTVA</p>
                </div>
              </div>
              <div class="mt-8">
                <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  class="inline-block rounded-md bg-blue-800 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">{{__("I'd like to register")}}</a>
              </div>
              <div class="mt-8">
                <h3 class="text-sm/6 font-medium text-gray-950">{{__('This price includes')}}:</h3>
                <ul class="mt-3 space-y-3">
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("Participation in the day's session (4 padel matches in the afternoon)")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("Participation in the final for the best teams in each session at no extra charge")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("A customized T-shirt with your company logo")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                   {{__("The goodie bag filled to the brim by our generous partners")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__('Access to additional events (clinics, exhibitions, etc.)')}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__('Networking cocktail at the end of each session')}}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="-m-2 grid grid-cols-1 rounded-[2rem] shadow-[inset_0_0_2px_1px_#ffffff4d] ring-1 ring-black/5 max-lg:mx-auto max-lg:w-full max-lg:max-w-md">
          <div class="grid grid-cols-1 rounded-[2rem] p-2 shadow-md shadow-black/5">
            <div class="rounded-3xl bg-white p-10 pb-9 shadow-2xl ring-1 ring-black/5">
              <h2 class="text-sm/5 font-semibold text-blue-800">{{__("Five sessions")}}</h2>
              <p class="mt-2 text-pretty text-sm/6 text-gray-600">{{__("Per team")}}</p>
              <div class="mt-8 flex items-center gap-4">
                <div class="text-5xl font-medium text-gray-950">215</div>
                <div class="text-sm/5 text-gray-600">
                  <p>EUR</p>
                  <p>HTVA</p>
                </div>
              </div>
              <div class="mt-8">
                <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  class="inline-block rounded-md bg-blue-800 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">{{__("I'd like to register")}}</a>
              </div>
              <div class="mt-8">
                <h3 class="text-sm/6 font-medium text-gray-950">{{__('This price includes')}}:</h3>
                <ul class="mt-3 space-y-3">
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("Participation in the day's session (4 padel matches in the afternoon)")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("Participation in the final for the best teams in each session at no extra charge")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("A customized T-shirt with your company logo")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                   {{__("The goodie bag filled to the brim by our generous partners")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__('Access to additional events (clinics, exhibitions, etc.)')}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__('Networking cocktail at the end of each session')}}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="-m-2 grid grid-cols-1 rounded-[2rem] shadow-[inset_0_0_2px_1px_#ffffff4d] ring-1 ring-black/5 max-lg:mx-auto max-lg:w-full max-lg:max-w-md">
          <div class="grid grid-cols-1 rounded-[2rem] p-2 shadow-md shadow-black/5">
            <div class="rounded-3xl bg-white p-10 pb-9 shadow-2xl ring-1 ring-black/5">
              <h2 class="text-sm/5 font-semibold text-blue-800">{{__('Ten sessions')}}</h2>
              <p class="mt-2 text-pretty text-sm/6 text-gray-600">{{__("Per team")}}</p>
              <div class="mt-8 flex items-center gap-4">
                <div class="text-5xl font-medium text-gray-950">195</div>
                <div class="text-sm/5 text-gray-600">
                  <p>EUR</p>
                  <p>HTVA</p>
                </div>
              </div>
              <div class="mt-8">
                <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  class="inline-block rounded-md bg-blue-800 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">{{__("I'd like to register")}}</a>
              </div>
              <div class="mt-8">
                <h3 class="text-sm/6 font-medium text-gray-950">{{__('This price includes')}}:</h3>
                <ul class="mt-3 space-y-3">
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("Participation in the day's session (4 padel matches in the afternoon)")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("Participation in the final for the best teams in each session at no extra charge")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__("A customized T-shirt with your company logo")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                   {{__("The goodie bag filled to the brim by our generous partners")}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__('Access to additional events (clinics, exhibitions, etc.)')}}
                  </li>
                  <li class="group flex items-start gap-4 text-sm/6 text-gray-600 data-[disabled]:text-gray-400">
                    <span class="inline-flex h-6 items-center">
                      <svg class="size-4 fill-gray-400 group-data-[disabled]:fill-gray-300" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                      </svg>
                    </span>

                    {{__('Networking cocktail at the end of each session')}}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-between py-16 opacity-60 max-sm:mx-auto max-sm:max-w-md max-sm:flex-wrap max-sm:justify-evenly max-sm:gap-x-4 max-sm:gap-y-4 sm:py-24">
        
      </div>
    </div>
  </div>
  
</div>