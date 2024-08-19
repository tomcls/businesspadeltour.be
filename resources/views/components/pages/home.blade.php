<x-layouts.home>
    <!-- This example requires Tailwind CSS v3.0+ -->
<!-- This example requires Tailwind CSS v3.0+ -->
<div class="isolate bg-white">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg class="relative left-[calc(80%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(20%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
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
      <div class="relative z-0">
        <div class="mx-auto max-w-7xl ">
          <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl ">
            <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform  lg:block fill-white" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
              
              <polygon points="0,0 90,0 50,100 0,100" />
            </svg>
    
            <div class="relative py-32 px-6 sm:py-40 lg:py-56 lg:px-8 lg:pr-0">
              <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                <h1 class="color-dark-blue text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl text-center justify-center">{{__('home.h1')}}</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600 text-center justify-center">{{__('home.teaser')}}</p>

                <div class="flex flex-1  w-100 flex-row mt-10 items-center justify-center">
                  <ul role="list" class="items-center justify-center inline-flex space-x-10">
                    <li>
                      <img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/immovlan_mauve.png'}}" alt="">
                    </li>
                    <li>
                      <img class="mx-auto w-40 pt-5" src="{{url('/').'/images/sponsors/Vertuoza-Logo.png'}}" alt="">
                    </li>
                    <!-- More people... -->
                  </ul>
                </div> 
                <div class="mt-10 flex items-center justify-center gap-x-6">
                  <a href="{{url('/').'/'.App::currentLocale().'#summary'}}" class="rounded-md bg-dark-blue px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('home.moreinfo')}}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img alt="poster image mobile" class=" paspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="{{url('/').'/images/section/home.jpg'}}" />
        </div>
      </div>
      <div class="overflow-hidden bg-black py-24 sm:py-32" id="summary">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <h2 class="text-lg font-semibold leading-8 tracking-tight color-light-blue">{{__('home.summaryTitle')}}</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-300 sm:text-4xl">{{__('home.summaryTitle2')}}</p>
                <p class="mt-6 text-lg leading-8 text-white">{!!__('home.summaryTeaser')!!}</p>
                <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}" class="mt-10 block w-full rounded-md bg-light-blue px-8 py-3 text-center text-md font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('home.priceImin')}}</a>
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                  {{-- <div class="relative pl-9">
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
                    <dd class="inline">{{__('home.summaryContent3')}}</dd>
                  </div> --}}
                </dl>
              </div>
            </div>
            <video autoplay="" id="heroVideo" controls   class="sm:block  w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[50rem] md:-ml-4 lg:-ml-0">
              <source src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/padel_compressed.mp4" type="video/mp4" />
            </video>
          </div>
        </div>
      </div>
      
      <div class="overflow-hidden bg-white py-24 sm:py-32" id="program">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <img src="{{url('/').'/images/section/bg10.png'}}" alt="Product screenshot" class="hidden sm:block w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[30rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <p class="mt-2 text-3xl font-bold tracking-tight color-light-blue sm:text-3xl">{{__('home.pgmTitle')}}</p>
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
                      <a href="https://planetpadel.be/"  target="blank" class="color-light-blue">{{__('home.clubContentPrefix1')}}:</a>
                    </dt>
                    <dd class="inline">{{__('home.clubContent1')}}</dd>
                  </div>
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <a href="https://www.tourtaxispadel.brussels/"  target="blank" class="color-light-blue"> {{__('home.clubContentPrefix2')}}:</a>
                    </dt>
                    <dd class="inline">{{__('home.clubContent2')}}</dd>
                  </div>
      
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <a href="https://www.tereiken.be/"  target="blank" class="color-light-blue">{{__('home.clubContentPrefix3')}}:</a>
                    </dt>
                    <dd class="inline">{{__('home.clubContent3')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <a href="https://teropadelclub.be"  target="blank" class="color-light-blue">{{__('home.clubContentPrefix4')}}:</a>
                    </dt>
                    <dd class="inline">{{__('home.clubContent4')}}</dd>
                  </div>



                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <a href="https://elevenpadel.be/" class="color-light-blue"> {{__('home.clubContentPrefix6')}}:</a>
                    </dt>
                    <dd class="inline">{{__('home.clubContent6')}}</dd>
                  </div>
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <a href="https://www.royalzoutetennisclub.be/"  target="blank" class="color-light-blue">  {{__('home.clubContentPrefix7')}}:</a>
                    </dt>
                    <dd class="inline">{{__('home.clubContent7')}}</dd>
                  </div>

                </dl>
              </div>
            </div>
            <img src="{{url('/').'/images/section/session1_107.jpg'}}" alt="Product screenshot" class="w-[52rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[54rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
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
                  <a href="https://planetpadel.be/"  target="blank" class="color-light-blue"> {{__('home.clubContentPrefix1')}} ( Planet Padel) </a>
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
                    <!-- Heroicon name: outline/arrow-path -->
                    <svg class=" h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://www.tourtaxispadel.brussels/"  target="blank" class="color-light-blue"> {{__('home.clubContentPrefix2')}} (Tour & Taxis Padel Club) </a>
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen2')}} <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10"><b>Sold Out!</b></span><br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere2')}}<br/><br/>
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
                  <a href="https://www.tereiken.be/"  target="blank" class="color-light-blue"> {{__('home.clubContentPrefix3')}} (Ter Eiken Padel)</a>
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
                  <a href="https://teropadelclub.be/fr"  target="blank" class="color-light-blue"> {{__('home.clubContentPrefix4')}} (Tero)</a>
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
                  <a href="https://elevenpadel.be/"  target="blank" class="color-light-blue">{{__('home.clubContentPrefix6')}} (Eleven Padel)</a>
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen6')}} {{__('sessions.afternoon')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere6')}}<br/><br/>
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
                  <a href="https://www.royalzoutetennisclub.be/" target="blank" class="color-light-blue"> {{__('home.thefinale')}} (Royal Zoute Tennis & Padel Club)</a>
                </dt>
                
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b>{{__('home.when')}}: </b> {{__('home.agendaWhen7')}}<br/>
                  <b>{{__('home.where')}}: </b> {{__('home.agendaWhere7')}}<br/><br/>
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
            <p class="mt-6 text-lg leading-8 text-gray-300 "><b>{{__('home.firstIn')}}</b></p>
          </div>
          <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none mb-10">
            <div class="p-8 sm:p-10 lg:flex-auto">
              <h3 class="text-2xl font-bold tracking-tight text-gray-300">{{__('home.priceTitle2')}}</h3>
              <p class="mt-6 max-w-3xl text-base text-indigo-50 pb-2">{{__('signup.teaser')}}</p>
              <ul class="text-white text-normal">
                <li>{{__('signup.teaser250')}}</li>
                <li>{{__('signup.teaser215')}}</li>
                <li>{{__('signup.teaser195')}}</li>
              </ul>
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
                <li class="flex gap-x-3">
                  <!-- Heroicon name: mini/check -->
                  <svg class="h-6 w-5 flex-none color-light-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  {{__('home.priceInclude5')}}
                </li>
                <li class="flex gap-x-3">
                  <!-- Heroicon name: mini/check -->
                  <svg class="h-6 w-5 flex-none color-light-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                  </svg>
                  {{__('home.priceInclude6')}}
                </li>
              </ul>
            </div>
            <div class="mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-xs lg:flex-shrink-0">
              <div class="rounded-2xl  py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:pt-40">
                <div class="mx-auto max-w-xs px-8">
                  
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}" class="mt-10 block w-full rounded-md bg-light-blue px-8 py-3 text-center text-md font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('home.priceImin')}}</a>
                  
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
          </div>
          <div class="flex flex-1 items-center justify-center w-100 flex-row mt-10">
            <ul role="list" class="items-center justify-center inline-flex space-x-10">
              <li>
                <a href="https://immo.vlan.be/fr"  target="_blank" > <img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/immovlan_mauve.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://www.vertuoza.com/"  target="_blank" > <img class="mx-auto h-14 mt-4 " src="{{url('/').'/images/sponsors/Vertuoza-Logo.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://wilmeyer.com/"  target="_blank" > <img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/wilmeyer.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://santospalaceshop.be/bruxelles/" target="_blank"  ><img class="mx-auto  max-h-20 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/santos.png'}}" alt=""></a>
              </li>
              <!-- More people... -->
            </ul>
          </div>
        </div>
      </div>

      <div class="bg-white " id="sponsor">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{__('home.clubTitle')}}</h2>
          </div>
          <div class="flex flex-1 mt-10">
            <ul role="list" class="sm:grid sm:grid-cols-6  sm:gap-4 sm:items-center justify-center  sm:border-t sm:border-gray-200 sm:py-5   sm:space-x-12">
              <li>
                <a href="https://tour-taxis.com/fr/event/world-padel-tour-2023-gare-maritime/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/clubs/padelclub.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://www.tereiken.be/"  target="_blank" ><img class="mx-auto  items-center justify-center mt-7" src="{{url('/').'/images/clubs/tereiken.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://planetpadel.be/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/clubs/planetpadel.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://elevenpadel.be/" target="_blank" ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/clubs/eleven.jpg'}}" alt=""></a>
              </li>
              <li>
                <a href="https://www.royalzoutetennisclub.be/" target="_blank" ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/clubs/zoute.jpg'}}" alt=""></a>
              </li>
              <li>
                <a href="https://teropadelclub.be/fr" target="_blank"  ><img class=" max-h-20 mx-auto items-center justify-center mt-7" src="{{url('/').'/images/sponsors/tero.png'}}" alt=""></a>
              </li>
              <!-- More people... -->
            </ul>
          </div>
        </div>
      </div>
    </main>
  </div>
  
</x-layouts.home>