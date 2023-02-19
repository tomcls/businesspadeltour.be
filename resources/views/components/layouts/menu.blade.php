<div class="sticky top-0 bg-white z-10" x-data="{ isMobileNavOpen: false }">
    <div class="mx-auto px-6">
      <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="{{url('/').'/'.App::currentLocale().''}}">
            <span class="sr-only">Business padel tour</span>
            <img class="h-8 w-auto sm:h-14" src="{{url('/').'/images/logo/logo.png'}}" alt="Business padel tour">
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <button @click="isMobileNavOpen = !isMobileNavOpen" type="button" class="inline-flex items-center justify-center rounded-md p-2 color-dark-blue hover:bg-gray-100 hover:color-dark-blue focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <nav class="hidden space-x-10 md:flex">
          <div x-data="{ isOpen: false }" class="relative" >
            <!-- Item active: "text-gray-900", Item inactive: "color-dark-blue" -->
            <button @click="isOpen = !isOpen" type="button" class="color-dark-blue group inline-flex items-center rounded-md text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-expanded="false">
              <span>Business padel tour</span>
              <!--
                Heroicon name: mini/chevron-down
  
                Item active: "text-gray-600", Item inactive: "color-dark-blue"
              -->
              <svg class="color-dark-blue ml-2 h-5 w-5 group-hover:color-dark-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
  
            <!--
              'Solutions' flyout menu, show/hide based on flyout menu state.
  
              Entering: "transition ease-out duration-200"
                From: "opacity-0 translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 translate-y-1"
            -->
            <div x-show="isOpen"
                @click.outside="isOpen = false"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute z-10 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">
              <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                  <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/chart-bar -->
                    <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                    </svg>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">Programme</p>
                      <p class="mt-1 text-sm color-dark-blue">5 sessions de 36 équipes tous les vendrdi apres-midi</p>
                    </div>
                  </a>
  
                  <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/cursor-arrow-rays -->
                    <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                    </svg>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">Reglement</p>
                      <p class="mt-1 text-sm color-dark-blue">Tous ce que vous devez savoir</p>
                    </div>
                  </a>
  
                  <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/shield-check -->
                    <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path>
                    </svg>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">Agenda</p>
                      <p class="mt-1 text-sm color-dark-blue">Les dates clefs jusqu'à la finale</p>
                    </div>
                  </a>
  
                  <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/squares-2x2 -->
                    <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
                    </svg>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">Sponsors</p>
                      <p class="mt-1 text-sm color-dark-blue">Accompagnez un projet moderne et ambitieux</p>
                    </div>
                  </a>
                  <a href="#" class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                    <!-- Heroicon name: outline/arrow-path -->
                    <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"></path>
                    </svg>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">Classement</p>
                      <p class="mt-1 text-sm color-dark-blue">Build strategic funnels that will drive your customers to convert</p>
                    </div>
                  </a>
  
                </div>
                <div class="space-y-6 bg-gray-50 px-5 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                  <div class="flow-root">
                    <a href="#" class="-m-3 flex items-center rounded-md p-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                      <!-- Heroicon name: outline/play -->
                      <svg class="h-6 w-6 flex-shrink-0 color-dark-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                      </svg>
                      <span class="ml-3">Regardez une démo</span>
                    </a>
                  </div>
  
                  <div class="flow-root">
                    <a href="#" class="-m-3 flex items-center rounded-md p-3 text-base font-medium text-gray-900 hover:bg-gray-100">
                      <!-- Heroicon name: outline/phone -->
                      <svg class="h-6 w-6 flex-shrink-0 color-dark-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                      </svg>
                      <span class="ml-3">Contactez-nous</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.price')}}" class="text-base font-medium color-dark-blue hover:text-gray-900">Prix</a>
          <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.articles')}}" class="text-base font-medium color-dark-blue hover:text-gray-900">Actu</a>
  
      
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0 ">
          <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-dark-blue px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Inscription</a>
          <div x-data="{ isOpen: false }" class="relative ml-3">
            <!-- Item active: "text-gray-900", Item inactive: "color-dark-blue" -->
            <button @click="isOpen = !isOpen" type="button" class="color-dark-blue group inline-flex items-center rounded-md  text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-expanded="false">
              <span>{{App::currentLocale()}}</span>
              <!--
                Heroicon name: mini/chevron-down
  
                Item active: "text-gray-600", Item inactive: "color-dark-blue"
              -->
              <svg class="color-dark-blue ml-6 h-5 w-5 group-hover:color-dark-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
  
            <!--
              'More' flyout menu, show/hide based on flyout menu state.
  
              Entering: "transition ease-out duration-200"
                From: "opacity-0 translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 translate-y-1"
            -->
            <div x-show="isOpen"
                @click.outside="isOpen = false"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute z-10 -ml-4 mt-3 w-22 max-w-xs transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">
                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                  <div class="relative grid  bg-white  py-1 sm:gap-1 sm:p-4 ">
                    <a href="{{url('/').'/en'}}" class=" flex items-start rounded-lg  hover:bg-gray-50">
                      <!-- Heroicon name: outline/lifebuoy -->
                      <div class="">
                        <p class="text-base font-medium text-gray-900">English</p>
                      </div>
                    </a>
                    <a href="{{url('/').'/nl'}}" class=" flex items-start rounded-lg  hover:bg-gray-50">
                      <!-- Heroicon name: outline/lifebuoy -->
                      <div class="">
                        <p class="text-base font-medium text-gray-900">Dutch</p>
                      </div>
                    </a>
                    <a href="{{url('/').'/fr'}}" class=" flex items-start rounded-lg  hover:bg-gray-50">
                      <!-- Heroicon name: outline/lifebuoy -->
                      <div class="">
                        <p class="text-base font-medium text-gray-900">Francais</p>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!--
      Mobile menu, show/hide based on mobile menu state.
  
      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div x-show="isMobileNavOpen"
        @click.outside="isMobileNavOpen = false"
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden z-10">
      <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
        <div class="px-5 pt-5 pb-6">
          <div class="flex items-center justify-between">
            <div>
              <img class="h-8 w-auto" src="{{url('/').'/images/logo/logo.png'}}" alt="Your Company">
            </div>
            <div class="-mr-2">
              <button @click="isMobileNavOpen = !isMobileNavOpen" type="button" class="inline-flex items-center justify-center rounded-md p-2 color-dark-blue hover:bg-gray-100 hover:color-dark-blue focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x-mark -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="mt-6">
            <nav class="grid gap-y-8">
              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/chart-bar -->
                <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Analytics</span>
              </a>
  
              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/cursor-arrow-rays -->
                <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Engagement</span>
              </a>
  
              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/shield-check -->
                <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Security</span>
              </a>
  
              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/squares-2x2 -->
                <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Integrations</span>
              </a>
  
              <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                <!-- Heroicon name: outline/arrow-path -->
                <svg class="h-6 w-6 flex-shrink-0 color-light-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
                <span class="ml-3 text-base font-medium text-gray-900">Automations</span>
              </a>
            </nav>
          </div>
        </div>
        <div class="space-y-6 py-6 px-5">
          <div class="grid grid-cols-2 gap-y-4 gap-x-8">
            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>
  
            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>
  
            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Help Center</a>
  
            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Guides</a>
  
            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Events</a>
  
            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Security</a>
          </div>
          <div>
            <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>