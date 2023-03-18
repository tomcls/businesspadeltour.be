<x-layouts.home>
    <!-- This example requires Tailwind CSS v3.0+ -->
<!-- This example requires Tailwind CSS v3.0+ -->
<div class="isolate bg-white">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
        <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
        <defs>
          <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
            <stop stop-color="#6fc3c3"></stop>
            <stop offset="1" stop-color="#24335e"></stop>
          </linearGradient>
        </defs>
      </svg>
    </div>
    <x-layouts.menu >
                
    </x-layouts.menu>
    <main>
      <div class="relative px-6 lg:px-8 z-0">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          
          <div class=" md:mb-8 sm:flex sm:justify-center ">
            
            {{-- <livewire:fetch-regions /> --}}
          </div>
          <div class="mt-10 flex items-center justify-center gap-x-6 mb-6">
            <img class=" " src="{{url('/').'/images/logo/logo.svg'}}" alt="Business padel tour">
          </div>
          <div class="text-center">
            
            <h1 class="text-4xl font-bold tracking-tight color-dark-blue sm:text-6xl"></h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">{{__('home.teaser')}}</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="{{url('/').'/'.App::currentLocale().'#summary'}}" class="rounded-md bg-dark-blue px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('home.moreinfo')}}</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
          <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
            <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
            <defs>
              <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                <stop stop-color="#6fc3c3"></stop>
                <stop offset="1" stop-color="#6fc3c3"></stop>
              </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
      <div class="overflow-hidden bg-black py-24 sm:py-32" id="summary">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <h2 class="text-lg font-semibold leading-8 tracking-tight color-light-blue">{{__('home.summaryTitle')}}</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-300 sm:text-4xl">{{__('home.summaryTitle2')}}</p>
                <p class="mt-6 text-lg leading-8 text-white">{{__('home.summaryTeaser')}}</p>
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.summaryContentPrefix1')}}
                    </dt>
                    <dd class="inline">{{__('home.summaryContent1')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/lock-closed -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.summaryContentPrefix2')}}
                    </dt>
                    <dd class="inline">{{__('home.summaryContent2')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.summaryContentPrefix3')}}
                    </dt>
                    <dd class="inline">{{__('home.summaryContent2')}}</dd>
                  </div>
                </dl>
              </div>
            </div>
            <img src="{{url('/').'/images/section/bg7.jpg'}}" alt="Product screenshot" class="hidden sm:block  w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[50rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
          </div>
        </div>
      </div>
      
      <div class="overflow-hidden bg-white py-24 sm:py-32" id="program">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <img src="{{url('/').'/images/section/bg5.jpg'}}" alt="Product screenshot" class="hidden sm:block w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[30rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <h2 class="text-lg font-semibold leading-8 tracking-tight color-light-blue">{{__('home.pgmTitle')}}</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-300 sm:text-4xl">{{__('home.pgmTitle2')}}</p>
                <p class="mt-6 text-lg leading-8 text-gray-900">{{__('home.pgmTeaser')}}</p>
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-900 lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.pgmContentPrefix1')}}
                    </dt>
                    <dd class="inline">{{__('home.pgmContent1')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/lock-closed -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.pgmContentPrefix2')}}
                    </dt>
                    <dd class="inline">{{__('home.pgmContent2')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.pgmContentPrefix3')}}
                    </dt>
                    <dd class="inline">{{__('home.pgmContent3')}}</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-hidden bg-black py-24 sm:py-32" id="club">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <h2 class="text-lg font-semibold leading-8 tracking-tight color-light-blue">{{__('home.clubTitle')}}</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-300 sm:text-4xl">{{__('home.clubTitle2')}}</p>
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.clubContentPrefix1')}}:
                    </dt>
                    <dd class="inline">{{__('home.clubContent1')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/lock-closed -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.clubContentPrefix2')}}:
                    </dt>
                    <dd class="inline">{{__('home.clubContent2')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.clubContentPrefix3')}}:
                    </dt>
                    <dd class="inline">{{__('home.clubContent3')}}</dd>
                  </div>

                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.clubContentPrefix4')}}:
                    </dt>
                    <dd class="inline">{{__('home.clubContent4')}}</dd>
                  </div>

                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.clubContentPrefix5')}}:
                    </dt>
                    <dd class="inline">{{__('home.clubContent5')}}</dd>
                  </div>

                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('home.clubContentPrefix6')}}:
                    </dt>
                    <dd class="inline">{{__('home.clubContent6')}}</dd>
                  </div>

                </dl>
              </div>
            </div>
            <img src="{{url('/').'/images/section/bg2.jpg'}}" alt="Product screenshot" class="w-[52rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[54rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
          </div>
        </div>
      </div>
      <div class="bg-white py-24 sm:py-32" id="agenda">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-lg font-semibold leading-8 tracking-tight color-light-blue">{{__('home.agenda')}}</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{__('home.agendaTitle2')}}</p>
            {{-- <p class="mt-6 text-lg leading-8 text-gray-600">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p> --}}
          </div>
          <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-light-blue">
                    <!-- Heroicon name: outline/cloud-arrow-up -->
                    <svg class=" h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  {{__('home.session')}} 1
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen1')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere1')}}<br/><br/>
                  {{-- Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget.<br/> --}}
                </dd>
              </div>
      
              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-light-blue">
                    <!-- Heroicon name: outline/lock-closed -->
                    <svg class=" h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  {{__('home.session')}} 2
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen2')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere2')}}<br/><br/>
                </dd>
              </div>
      
              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-light-blue">
                    <!-- Heroicon name: outline/arrow-path -->
                    <svg class=" h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  {{__('home.session')}} 3
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen3')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere3')}}<br/><br/>
                </dd>
              </div>
      
              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-light-blue">
                    <!-- Heroicon name: outline/finger-print -->
                    <svg class=" h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  {{__('home.session')}} 4
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen4')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere4')}}<br/><br/>
                </dd>
              </div>

              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-light-blue">
                    <!-- Heroicon name: outline/finger-print -->
                    <svg class=" h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  {{__('home.session')}} 5
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen5')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere5')}}<br/><br/>
                </dd>
              </div>

              <div class="relative pl-16">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-light-blue">
                    <!-- Heroicon name: outline/finger-print -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"></path>
                    </svg>
                  </div>
                  {{__('home.thefinale')}}
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen6')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere6')}}<br/><br/>
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
      <!-- This example requires Tailwind CSS v3.0+ -->
      <div class="bg-dark-blue py-24 sm:py-32" id="price">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl">{{__('home.priceTitle')}}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300">{{__('home.priceTeaser')}}</p>
          </div>
          <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
            <div class="p-8 sm:p-10 lg:flex-auto">
              <h3 class="text-2xl font-bold tracking-tight text-gray-300">{{__('home.priceTitle2')}}</h3>
              <p class="mt-6 text-base leading-7 text-gray-100">{{__('home.priceTeaser2')}}</p>
              <div class="mt-10 flex items-center gap-x-4">
                <h4 class="flex-none text-sm font-semibold leading-6 color-light-blue">{{__('home.priceInclude')}}</h4>
                <div class="h-px flex-auto bg-gray-100"></div>
              </div>
              <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-100 sm:grid-cols-2 sm:gap-6">
                <li class="flex gap-x-3">
                  <!-- Heroicon name: mini/check -->
                  <svg class="h-6 w-5 flex-none color-light-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  {{__('home.priceInclude1')}}
                </li>

                <li class="flex gap-x-3">
                  <!-- Heroicon name: mini/check -->
                  <svg class="h-6 w-5 flex-none color-light-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  {{__('home.priceInclude2')}}
                </li>

                <li class="flex gap-x-3">
                  <!-- Heroicon name: mini/check -->
                  <svg class="h-6 w-5 flex-none color-light-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  {{__('home.priceInclude3')}}
                </li>
                <li class="flex gap-x-3">
                  <!-- Heroicon name: mini/check -->
                  <svg class="h-6 w-5 flex-none color-light-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  {{__('home.priceInclude4')}}
                </li>
              </ul>
            </div>
            <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
              <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                <div class="mx-auto max-w-xs px-8">
                  <p class="text-base font-semibold text-gray-600">{{__('home.pricePerSession')}}</p>
                  <p class="mt-6 flex items-baseline justify-center gap-x-2">
                    <span class="text-5xl font-bold tracking-tight text-gray-900">€250</span>
                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">EUR</span>
                  </p>
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}" class="mt-10 block w-full rounded-md bg-light-blue px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('home.priceImin')}}</a>
                  <p class="mt-6 text-xs leading-5 text-gray-600">{{__('home.priceInvoice')}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="bg-white py-24 sm:py-32 " id="sponsor">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{__('home.sponsorTitle')}}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">{{__('home.sponsorTeaser')}}</p>
          </div>
          <div class="flex flex-1 items-center justify-center w-100 flex-row mt-10">
            <ul role="list" class="items-center justify-center inline-flex space-x-10">
              <li>
                <img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/immovlan_mauve.png'}}" alt="">
              </li>
              <li>
                <img class="mx-auto w-50 " src="{{url('/').'/images/sponsors/b19.png'}}" alt="">
              </li>
              <!-- More people... -->
            </ul>
          </div>
        </div>
      </div>
    </main>
  </div>
  
</x-layouts.home>