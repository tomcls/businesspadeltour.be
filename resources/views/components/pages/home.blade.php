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
    
            <div class=" relative py-32 px-6 sm:py-40 lg:py-56 lg:px-8 lg:pr-0  animate-fadein" >
              <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl ">
                <h1 class="color-dark-blue text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl text-center justify-center  ">{{__('home.h1')}}</h1>
                {{-- <p class="mt-6 text-lg leading-8 text-gray-600 text-center justify-center">{{__('home.teaser')}}</p> --}}

                <div class="flex flex-1  w-100 flex-row mt-10 items-center justify-center">
                </div> 
                <p class="text-center text-pretty text-xl py-10 color-dark-blue">{{__('All you need to know about the 2025 season of the Vertuoza Padel Tour?')}}</p>
                <p class="text-center  text-pretty leading-8 text-gray-700 text-lg" >{{__("We're organizing 2 information sessions on November 8 in Bruges and November 13 in Brussels, during which we'll be unveiling the concept, the full program and the new features in the company of our partners.")}}</p>
                
                <p class="text-center pt-10">
                  <a href="{{url('/').'/'.App::currentLocale().'/welcome-event'}}" class="inline-block rounded-full border-blue-900 border bg-white px-3.5 py-3 text-center text-sm/6 font-semibold text-blue-900 shadow-sm hover:bg-blue-900 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                    {{__("I'd like to register")}}
                    <x-icon.right class="h-4"/>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img alt="poster image mobile" class="animate-fadein paspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="{{url('/').'/images/section/home.jpg'}}" />
        </div>
      </div>
      <div class="bg-white pb-20 hidden sm:block" >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          
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
                <a href="https://brugge.arenal.be/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7 w-40 h-20" src="https://brugge.arenal.be/themes/custom/arenal/logo-new.svg" alt=""></a>
              </li>
              <li>
                <a href="https://www.cupra.be/fr" target="_blank"  ><img class="mx-auto  max-h-24 items-center justify-center mt-7 h-44 w-72" src="https://www.cupra.be/images/logo.svg" alt=""></a>
              </li>
              <!-- More people... -->
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-black py-24 sm:py-32" id="summary">
        <div class="mx-auto max-w-7xl px-6 lg:px-4">
          <div class="mx-auto max-w-7xl sm:text-center">
            <h2 class="pb-10 animate-fadein text-gray-200 text-pretty  font-medium tracking-tight text-4xl sm:text-6xl">{{__('What is the Vertuoza Padel Tour?')}}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300 sm:text-justify">{!!__("Launched in 2023, the Vertuoza Padel Tour is a Padel competition open to all companies operating in Belgium. The competition consists of several sessions held on Friday afternoons at various Padel clubs throughout Belgium. <br>In 2025, 6 clubs will host a stage of the Vertuoza Padel Tour, with sessions in Liège, Brussels, Waterloo, Ghent, Antwerp and Nivelles, and the grand finale at Le Zoute.<br><br> The tournament is mixed, open to all, and this year we're planning two categories: Fun and Expert. <br><br><b>The aim of the Vertuoza Padel Tour is threefold: Sport + Fun + Networking</b><br><br> 80 teams were able to meet in 2023, and we hope to gather at least 250 teams for the 2025 season.")!!}</p>
          </div>
        </div>
      </div>
      <div class="overflow-hidden bg-black py-2 sm:py-2 pb-24 sm:pb-32" >
        <div class="mx-auto max-w-7xl px-6 lg:px-8 sm:text-center items-center content-center justify-center">
          <video  id="heroVideo" controls   class="sm:block  w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10  md:-ml-4 lg:-ml-0">
            <source src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/padel_compressed.mp4" type="video/mp4" />
          </video>
        </div>
      </div>
      
      <div class="overflow-hidden bg-white py-24 sm:py-32" id="program">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 ">
            <img src="{{url('/').'/images/section/bg10.png'}}" alt="Product screenshot" class="hidden sm:block w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[30rem] md:-ml-4 lg:-ml-0 sm:mt-24" width="2432" height="1442">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <p class="mt-2 animate-fadein text-pretty  font-medium tracking-tight text-4xl sm:text-6xl color-light-blue ">{{__('How does it work?')}}</p>
                <p class="mt-6 text-lg leading-8 text-gray-900">{{__('The Vertuoza Padel Tour is open to all, but each team must be registered in the name of a company, association or organization.')}}</p>
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-900 lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      
                    </dt>
                    <dd class="inline">{{__('Each session is independent: a company can register one or more teams for one or more sessions in one or more categories.')}}</dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/lock-closed -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      {{__('The categories are')}}:
                    </dt>
                    <dd class="inline">
                      <ul>
                        <li><span class="font-bold">Fun :</span>  {{__('total team ranking does not exceed P200')}}</li>
                        <li><span class="font-bold">Advanced :</span> {{__('total team ranking does not exceed P600')}}</li>
                        <li><span class="font-bold">Expert : </span>{{__('total team ranking exceeds P600')}}</li>
                      </ul>
                    </dd>
                  </div>
      
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                    </dt>
                    <dd class="inline">{{__('We ask participants to take their actual level into account to ensure fairness.  An unclassified player with a P300 level should register for Advanced rather than Fun. ')}}</dd>
                  </div>
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/server -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                    </dt>
                    <dd class="inline">{{__("We don't check players' employment contracts or standings, but we do expect everyone to play fair and correct, given that the competition has no stake in points or official standings.")}}</dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-black pt-24 sm:pt-32" id="club">
        <div class="mx-auto max-w-7xl px-6 lg:px-14">
          <div class="mx-auto max-w-7xl sm:text-center">
            <h2 class=" animate-fadein text-pretty  font-medium tracking-tight text-4xl sm:text-6xl color-light-blue">{{__('The clubs')}}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300 sm:text-justify">{!!__("New partnerships mean new clubs!  This year, we'll be present in 12 different clubs throughout Belgium, making the Vertuoza Padel Tour the first corporate padel competition in Belgium, and it's not impossible that other stages will be added to the program.  The partner clubs are listed below.")!!}</p>
          </div>
        </div>
      </div>
      <div class="overflow-hidden bg-black " >
        <div class="mx-auto max-w-7xl px-6 lg:px-8 pb-20">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <span  class="color-white">{{__('In Flanders')}}:</span>
                    </dt>
                    <dd class="py-2">- <b><a href="https://grimbergen.arenal.be/" class="color-light-blue" target="blank">{{__('Arenal Grimbergen')}}</a></b> <span class="font-light text-sm">{{__('Antwerpselaan 1, 1853 Grimbergen')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://brugge.arenal.be" class="color-light-blue" target="blank">{{__('Arenal Bruges')}}</a></b> <span class="font-light text-sm">{{__('Geralaan 51, 8310 Sint-Kruis')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://waregem.arenal.be/" class="color-light-blue" target="blank">{{__('Arenal Waregem')}}</a></b> <span class="font-light text-sm">{{__('F. Rooseveltlaan 155, 8790 Waregem')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://bree.arenal.be/" class="color-light-blue" target="blank">{{__('Arenal Bree')}}</a></b> <span class="font-light text-sm">{{__('Watertorenstraat 16, 3960 Bree')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://mechelen.arenal.be/" class="color-light-blue" target="blank">{{__('Arenal Mechelen')}}</a></b> <span class="font-light text-sm">{{__('Kruisbaan 56, 2800 Mechelen')}}</span></dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg">
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <span  class="color-white">{{__('In Brussels')}}:</span>
                    </dt>
                    <dd class="py-2">- <b><a href="https://www.tourtaxispadel.brussels/" class="color-light-blue" target="blank">{{__('Tour & Taxis Padel Club')}}</a></b> <span class="font-light text-sm">{{__('Tour & Taxis 88 – 1000 Bruxelles')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://tero.be/fr/houses/detail/tero-padel-club-louise/" class="color-light-blue" target="blank">{{__('Tero Louise')}}</a></b> <span class="font-light text-sm">{{__('rue du Beau Site, 26 – 1000 Bruxelles')}}</span></dd>
                  </div>
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <span  class="color-white">{{__('In Wallonia')}}:</span>
                    </dt>
                    <dd class="py-2">- <b><a href="https://tero.be/fr/houses/detail/tero-padel-club/" class="color-light-blue" target="blank">{{__('Tero Waterloo')}}</a></b> <span class="font-light text-sm">{{__('chaussée de Tervuren 389 – 1410 Waterloo')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://elevenpadel.be/" class="color-light-blue" target="blank">{{__('Eleven Nivelles')}}</a></b> <span class="font-light text-sm">{{__('rue de l’industrie 11 – 1400 Nivelles')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://planetpadel.be/" class="color-light-blue" target="blank">{{__('Planet Padel')}}</a></b> <span class="font-light text-sm">{{__('rue de la Vallée 10 – 4470 Saint-Georges-sur Meuse')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://www.mokkopadelproject.be" class="color-light-blue" target="blank">{{__('Mokko Padel')}}</a></b> <span class="font-light text-sm">{{__('rue de la Glacerie 11 – 5150 Floreffe')}}</span></dd>
                  </div>
                 
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white py-24 sm:py-32" id="agenda">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-pretty text-5xl font-medium tracking-tight  sm:text-6xl color-dark-blue pb-7">{{__('Agenda 2025')}}</h2>
            <p class="mt-2 text-xl font-bold tracking-tight text-gray-700 sm:text-xl">{{__("The 2025 program is practically finalized. If anything changes, we'll be sure to let you know.")}}</p>
            <p class="mt-2 text-lg font-normal tracking-tight text-gray-700 sm:text-lg">{{__('Each session runs from +/- 1pm to 6pm.  The schedule may vary according to the number of participants and the number of available pitches. A detailed schedule will be provided to each participating team a few days before the session for which they are registered.')}}</p>
          </div>
          <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-y-5 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-2">
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://waregem.arenal.be/"  target="blank" class="color-dark-blue"> {{__('Arenal Waregem')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('21/3/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Antwerpselaan 1, 1853 Grimbergen')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://tero.be/fr/houses/detail/tero-padel-club-louise/"  target="blank" class="color-dark-blue"> {{__('Tero Louise')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('28/3/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('rue du Beau Site, 26 – 1000 Bruxelles')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://planetpadel.be/"  target="blank" class="color-dark-blue"> Tenerife ({{__('find out more about this session')}})</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('From 2/4/2025 to 6/4/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Tenerife')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://planetpadel.be/"  target="blank" class="color-dark-blue"> {{__('Planet Padel')}} </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('11/4/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('rue de la Vallée 10 – 4470 Saint-Georges-sur Meuse')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://www.mokkopadelproject.be"  target="blank" class="color-dark-blue"> {{__('Mokko Padel')}} </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('18/4/2025 ')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('rue de la Glacerie 11 – 5150 Floreffe')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://www.tourtaxispadel.brussels/"  target="blank" class="color-dark-blue"> {{__('Tour & Taxis Padel Club')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('25/4/2025 ')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Tour & Taxis 88 – 1000 Bruxelles')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://mechelen.arenal.be"  target="blank" class="color-dark-blue"> {{__('Arenal Mechelen')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('9/5/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Kruisbaan 56, 2800 Mechelen')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://grimbergen.arenal.be"  target="blank" class="color-dark-blue"> {{__('Arenal Grimbergen')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('23/5/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Antwerpselaan 1, 1853 Grimbergen')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://tero.be/fr/houses/detail/tero-padel-club/"  target="blank" class="color-dark-blue"> {{__('Tero Waterloo')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('16/5/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('chaussée de Tervuren 389 – 1410 Waterloo')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://Geralaan 51, 8310 Sint-Kruis.arenal.be "  target="blank" class="color-dark-blue"> {{__('Arenal Brugge')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('6/6/2025 ')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Geralaan 51, 8310 Sint-Kruis')}}</span> <br/><br/>
                </dd>
              </div>

              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://bree.arenal.be "  target="blank" class="color-dark-blue"> {{__('Arenal Bree')}} </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('13/6/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('hWatertorenstraat 16, 3960 Bree')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <!-- Heroicon name: outline/cloud-arrow-up -->
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://www.arenal.be"  target="blank" class="color-dark-blue"> {{__('Arenal Antwerp')}} </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('20/6/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Arenal Antwerp')}}</span> <br/><br/>
                  {{-- Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget.<br/> --}}
                </dd>
              </div>
      
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <!-- Heroicon name: outline/cloud-arrow-up -->
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="https://elevenpadel.be/"  target="blank" class="color-dark-blue"> {{__('Eleven Nivelles')}}</a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('20/6/2025 ')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('rue de l’industrie 11 – 1400 Nivelles')}}</span> <br/><br/>
                  {{-- Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget.<br/> --}}
                </dd>
              </div>
      
              
            </dl>
          </div>
          <div class="mx-auto max-w-2xl lg:text-center">
            <p class="mt-2 text-lg font-normal tracking-tight text-gray-700 sm:text-lg">{!!__('Nous allons nous efforcer de satisfaire tout le monde, mais nous sommes limités par le nombre de terrains disponibles.  <b>Premier arrivé, premier servi !</b>')!!}</p>
          </div>
          <p class="text-center pt-10">
            <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}" class="inline-block rounded-md bg-blue-800 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">{{__("I get it, I'm in!")}}</a>
          </p>
        </div>
      </div>
      @livewire('price', key('price'))
      
     
      
      
      <div class="bg-white " id="sponsor">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{__('home.sponsorTitle')}}</h2>
          </div>
          <div class="flex flex-1 mt-10">
            <ul role="list" class="sm:grid sm:grid-cols-6  sm:gap-4 sm:items-center justify-center  sm:border-t sm:border-gray-200 sm:py-5   sm:space-x-12">
              <li>
                <a href="https://immo.vlan.be/fr" target="_blank"  ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/sponsors/immovlan_mauve.png'}}"  alt=""></a>
              </li>
              <li>
                <a href="https://wilmeyer.com/"  target="_blank" ><img class="mx-auto  items-center justify-center mt-7" src="{{url('/').'/images/sponsors/Vertuoza-Logo.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://brugge.arenal.be/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/sponsors/wilmeyer.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://santospalaceshop.be/bruxelles/" target="_blank" ><img class="mx-auto items-center justify-center mt-7" src="https://brugge.arenal.be/themes/custom/arenal/logo-new.svg" alt=""></a>
              </li>
              <li>
                <a href="https://www.cupra.be/fr" target="_blank" ><img class="mx-auto items-center justify-center mt-7 h-44 w-72" src="https://www.cupra.be/images/logo.svg" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-white " id="sponsor">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{__('The clubs')}}</h2>
          </div>
          <div class="flex flex-1 mt-10">
            <ul role="list" class="sm:grid sm:grid-cols-6  sm:gap-4 sm:items-center justify-center  sm:border-t sm:border-gray-200 sm:py-5   sm:space-x-12">
              <li>
                <a href="https://tour-taxis.com/fr/event/world-padel-tour-2023-gare-maritime/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/clubs/padelclub.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://brugge.arenal.be/"  target="_blank" ><img class="mx-auto  items-center justify-center mt-7" src="https://brugge.arenal.be/themes/custom/arenal/logo-new.svg" alt=""></a>
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