<div class="isolate bg-white"  >
  <main>
        <div class="relative isolate overflow-hidden pt-14">
          <img src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/home-dark.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
          <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
          <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          
            <div class="text-center">
              <div class="flex flex-row content-center justify-center">
                <div class="fadinAnimation opacity-0 text-balance text-2xl font-bold tracking-tight text-white sm:text-4xl pb-3">Vertuoza + Arenal + Immovlan </div>  
                <div class=" fadinAnimation opacity-0 text-balance text-2xl font-bold tracking-tight text-white sm:text-4xl pt-1 pl-1">=</div>
              </div>
              
              <h1 class="fadinAnimation opacity-0 text-balance text-4xl font-bold tracking-tight text-white sm:text-6xl">{{__('home.h1')}}</h1>
              <p class="fadinAnimation opacity-0 mt-6 text-lg leading-8 text-gray-300 px-6">{!!__('All you need to know about the 2025 season of the Vertuoza Padel Tour?')!!}</p>
              <p class="fadinAnimation opacity-0 mt-6 text-lg leading-8 text-gray-300 px-6">{!!__("We're organizing 2 information sessions on November 8 in Bruges and November 13 in Brussels, during which we'll be unveiling the concept, the full program and the new features in the company of our partners.")!!}</p>
              <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}" class="fadinAnimation opacity-0 inline-block rounded-full border-blue-500 border  px-3.5 py-3 text-center text-base font-semibold bg-blue-900 text-white hover:text-blue-400 hover:bg-transparent shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                  {{__("Sign up now!")}}
                  <x-icon.right class="h-4"/>
                </a>
              </div>
            </div>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>

      {{-- <div class="relative z-0">
        <div class="mx-auto max-w-7xl ">
          <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl ">
            <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform  lg:block fill-white" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
              
              <polygon points="0,0 90,0 50,100 0,100" />
            </svg>
    
            <div class=" relative py-32 px-6 sm:py-40 lg:py-56 lg:px-8 lg:pr-0  "  >
              <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl ">
                <h1 class="color-dark-blue text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl text-center justify-center fadinAnimation opacity-0" >{{__('home.h1')}}</h1>
                <div class="flex flex-1  w-100 flex-row mt-10 items-center justify-center">
                </div> 
                <p class="fadinAnimation opacity-0 text-center text-pretty text-xl py-10 color-dark-blue">{{__('All you need to know about the 2025 season of the Vertuoza Padel Tour?')}}</p>
                <p class="fadinAnimation opacity-0 text-center  text-pretty leading-8 text-gray-700 text-lg" >{{__("We're organizing 2 information sessions on November 8 in Bruges and November 13 in Brussels, during which we'll be unveiling the concept, the full program and the new features in the company of our partners.")}}</p>
                
                <p class="text-center pt-10">
                  <a href="{{url('/').'/'.App::currentLocale().'/welcome-event'}}" class="fadinAnimation opacity-0 inline-block rounded-full border-blue-900 border bg-white px-3.5 py-3 text-center text-base font-semibold text-blue-900 shadow-sm hover:bg-blue-900 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
                    {{__("I'd like to register")}}
                    <x-icon.right class="h-4"/>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img alt="poster image mobile" class="fadinAnimation opacity-0 paspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="{{url('/').'/images/section/home.jpg'}}" />
        </div>
      </div> --}}
      <div class="bg-white pb-20 hidden sm:block" >
        <div class="mx-auto max-w-full px-6 lg:px-8">
          
          <div class="flex flex-1 items-center justify-center w-100 flex-row mt-10">
            <ul role="list" class="items-center justify-center inline-flex space-x-10">
              <li>
                <a href="https://www.vertuoza.com/"  target="_blank" > <img class="fadinAnimation opacity-0 mx-auto h-8 mt-4 " src="{{url('/').'/images/sponsors/Vertuoza-Logo.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://brugge.arenal.be/" target="_blank"  ><img class="fadinAnimation opacity-0 mx-auto items-center justify-center mt-7 w-40 h-20" src="https://brugge.arenal.be/themes/custom/arenal/logo-new.svg" alt=""></a>
              </li>
              <li>
                <a href="https://immo.vlan.be/fr"  target="_blank" > <img class="fadinAnimation opacity-0 mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/immovlan_mauve.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://wilmeyer.com/"  target="_blank" > <img class="fadinAnimation opacity-0 mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/wilmeyer.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://santospalaceshop.be/bruxelles/" target="_blank"  ><img class="fadinAnimation opacity-0 mx-auto  max-h-20 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/santos.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://www.cupra.be/fr" target="_blank"  ><img class="fadinAnimation opacity-0 mx-auto  max-h-24 items-center justify-center mt-7 h-44 w-72" src="https://www.cupra.be/images/logo.svg" alt=""></a>
              </li>
              <li>
                <a href="https://www.vandelanotte.be/" target="_blank"  ><img class="fadinAnimation opacity-0 mx-auto  max-h-10 items-center justify-center mt-7 h-44" src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/vandelanotte.png" alt=""></a>
              </li>
              <!-- More people... -->
            </ul>
          </div>
        </div>
      </div>
      <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl  sm:px-16 " id="summary">
        <h2 class="pb-10 fadinAnimation opacity-0 text-gray-200 text-pretty  font-medium tracking-tight text-4xl sm:text-6xl">{{__('What is the Vertuoza Padel Tour?')}}</h2>
        <p class="mx-auto mt-6 max-w-5xl text-lg leading-8 text-gray-300 text-justify">{!!__("Launched in 2023, the Vertuoza Padel Tour is a Padel competition open to all companies operating in Belgium. The competition consists of several sessions held on Friday afternoons at various Padel clubs throughout Belgium. <br>In 2025, 6 clubs will host a stage of the Vertuoza Padel Tour, with sessions in Liège, Brussels, Waterloo, Ghent, Antwerp and Nivelles, and the grand finale at Le Zoute.<br><br> The tournament is mixed, open to all, and this year we're planning two categories: Fun and Expert. <br><br><b>The aim of the Vertuoza Padel Tour is threefold: Sport + Fun + Networking</b><br><br> 80 teams were able to meet in 2023, and we hope to gather at least 250 teams for the 2025 season.")!!}</p>
        <div class="mx-auto max-w-6xl  pt-10 lg:px-8 sm:text-center items-center content-center justify-center">
          @if (App::currentLocale() == 'nl')
          <video  id="heroVideo" controls   class="fadinAnimation opacity-0 sm:block  w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10  md:-ml-4 lg:-ml-0">
            <source src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/videos/arenal-waregem-bc-2024.mp4" type="video/mp4"  />
          </video>
          @else
          <video  id="heroVideo" controls   class="fadinAnimation opacity-0 sm:block  w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10  md:-ml-4 lg:-ml-0">
            <source src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/padel_compressed.mp4" type="video/mp4"  />
          </video>
          @endif
        </div>
        <div class="absolute -top-24 right-0 -z-10 transform-gpu blur-3xl" aria-hidden="true">
          <div class="aspect-[1404/767] w-[87.75rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
        </div>
      </div>
      <!-- CTA section -->
    <div class="relative isolate -z-10 mt-32 sm:mt-32">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 pb-10">
        <div class="mx-auto flex max-w-2xl flex-col gap-16 bg-slate-500/5 px-6 py-16 ring-1 ring-slate-200 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-20 xl:gap-x-20 xl:px-20">
          <img class="h-96 w-full flex-none rounded-2xl object-cover shadow-xl lg:aspect-square lg:h-auto lg:max-w-md" src="https://businesspadeltour.be/images/sessions2024/session1_911.jpg" alt="">
          <div class="w-full flex-auto">
            <div class="lg:max-w-lg">
              <p class="mt-2 fadinAnimation opacity-0 text-pretty  font-medium tracking-tight text-4xl sm:text-6xl color-light-blue ">{{__('How does it work?')}}</p>
              <p class="mt-6 text-lg leading-8 text-gray-900">{!!__('The Vertuoza Padel Tour is open to all, but each team must be registered in the name of a company, association or organization.')!!}</p>
              <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-900 lg:max-w-none">
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-gray-400">
                    <!-- Heroicon name: mini/cloud-arrow-up -->
                    <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                    
                  </dt>
                  <dd class="fadinAnimation opacity-0 inline">{{__('Each session is independent: a company can register one or more teams for one or more sessions in one or more categories.')}}</dd>
                </div>
    
                <div class="relative pl-9">
                  <dt class="inline font-semibold text-gray-400 fadinAnimation opacity-0">
                    <!-- Heroicon name: mini/lock-closed -->
                    <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                    {{__('The categories are')}}:
                  </dt>
                  <dd class="inline fadinAnimation opacity-0">
                    <ul>
                      <li><span class="font-bold">Fun :</span>  {{__('total team ranking does not exceed P200')}}</li>
                      <li><span class="font-bold">Advanced :</span> {{__('total team ranking does not exceed P600')}}</li>
                      <li><span class="font-bold">Expert : </span>{{__('total team ranking exceeds P600')}}</li>
                    </ul>
                  </dd>
                </div>
    
                <div class="relative pl-9 fadinAnimation opacity-0">
                  <dt class="inline font-semibold text-gray-400">
                    <!-- Heroicon name: mini/server -->
                    <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </dt>
                  <dd class="inline">{!!__('We ask participants to take their actual level into account to ensure fairness.  An unclassified player with a P300 level should register for Advanced rather than Fun. ')!!}</dd>
                </div>
                <div class="relative pl-9 fadinAnimation opacity-0">
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
      <div class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
        <div class="aspect-[1318/752] w-[82.375rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
      </div>
    </div>
      

      <div class="bg-black pt-24 sm:pt-32" id="club">
        <div class="mx-auto max-w-7xl px-6 lg:px-14">
          <div class="mx-auto max-w-7xl sm:text-center">
            <h2 class=" fadinAnimation opacity-0 text-pretty  font-medium tracking-tight text-4xl sm:text-6xl color-light-blue">{{__('The clubs')}}</h2>
            <p class="fadinAnimation opacity-0 mt-6 text-lg leading-8 text-gray-300 sm:text-justify">{!!__("New partnerships mean new clubs!  This year, we'll be present in 12 different clubs throughout Belgium, making the Vertuoza Padel Tour the first corporate padel competition in Belgium, and it's not impossible that other stages will be added to the program.  The partner clubs are listed below.")!!}</p>
          </div>
        </div>
      </div>
      <div class="overflow-hidden bg-black " >
        <div class="mx-auto max-w-7xl px-6 lg:px-8 pb-20">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-8 lg:pt-4">
              <div class="lg:max-w-lg fadinAnimation opacity-0">
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <span  class="color-white  ">{{__('In Flanders')}}:</span>
                    </dt>
                    <dd class="py-2">- <b><a href="https://grimbergen.arenal.be/" class=" color-light-blue" target="blank">{{__('Arenal Grimbergen')}}</a></b> <span class=" font-light text-sm">{{__('Antwerpselaan 1, 1853 Grimbergen')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://brugge.arenal.be" class=" color-light-blue" target="blank">{{__('Arenal Bruges')}}</a></b> <span class=" font-light text-sm">{{__('Geralaan 51, 8310 Sint-Kruis')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://waregem.arenal.be/" class=" color-light-blue" target="blank">{{__('Arenal Waregem')}}</a></b> <span class=" font-light text-sm">{{__('F. Rooseveltlaan 155, 8790 Waregem')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://bree.arenal.be/" class=" color-light-blue" target="blank">{{__('Arenal Bree')}}</a></b> <span class=" font-light text-sm">{{__('Watertorenstraat 16, 3960 Bree')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://mechelen.arenal.be/" class=" color-light-blue" target="blank">{{__('Arenal Mechelen')}}</a></b> <span class=" font-light text-sm">{{__('Kruisbaan 56, 2800 Mechelen')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://arenal.be/" class=" color-light-blue" target="blank">{{__('Arenal Antwerpen')}}</a></b> <span class=" font-light text-sm">{{__('New location')}}</span></dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="lg:pr-8 lg:pt-4 fadinAnimation opacity-0">
              <div class="lg:max-w-lg">
                <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class=" absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <span  class="color-white  ">{{__('In Brussels')}}:</span>
                    </dt>
                    <dd class="py-2">- <b><a href="https://www.tourtaxispadel.brussels/" class=" color-light-blue" target="blank">{{__('Tour & Taxis Padel Club')}}</a></b> <span class="font-light text-sm">{{__('Tour & Taxis 88 – 1000 Bruxelles')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://tero.be/fr/houses/detail/tero-padel-club-louise/" class=" color-light-blue" target="blank">{{__('Tero Louise')}}</a></b> <span class="font-light text-sm">{{__('rue du Beau Site, 26 – 1000 Bruxelles')}}</span></dd>
                  </div>
                  <div class="relative pl-9">
                    <dt class="inline font-semibold text-gray-400">
                      <!-- Heroicon name: mini/cloud-arrow-up -->
                      <svg class="absolute top-1 left-1 h-6 w-6 color-light-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                      </svg>
                      <span  class=" color-white">{{__('In Wallonia')}}:</span>
                    </dt>
                    <dd class="py-2">- <b><a href="https://tero.be/fr/houses/detail/tero-padel-club/" class=" color-light-blue" target="blank">{{__('Tero Waterloo')}}</a></b> <span class=" font-light text-sm">{{__('chaussée de Tervuren 389 – 1410 Waterloo')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://elevenpadel.be/" class=" color-light-blue" target="blank">{{__('Eleven Nivelles')}}</a></b> <span class=" font-light text-sm">{{__('rue de l’industrie 11 – 1400 Nivelles')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://planetpadel.be/" class=" color-light-blue" target="blank">{{__('Planet Padel')}}</a></b> <span class=" font-light text-sm">{{__('rue de la Vallée 10 – 4470 Saint-Georges-sur Meuse')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://www.mokkopadelproject.be" class=" color-light-blue" target="blank">{{__('Mokko Padel')}}</a></b> <span class=" font-light text-sm">{{__('rue de la Glacerie 11 – 5150 Floreffe')}}</span></dd>
                    <dd class="py-2">- <b><a href="https://www.welpadel.be" class=" color-light-blue" target="blank">{{__('Welpadel')}}</a></b> <span class=" font-light text-sm">{{__('Rue Chant des Oiseaux 13, 4840 Welkenraedt')}}</span></dd>
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
            <h2 class="fadinAnimation opacity-0 text-pretty text-5xl font-medium tracking-tight  sm:text-6xl color-dark-blue pb-7">{{__('Agenda 2025')}}</h2>
            <p class="fadinAnimation opacity-0 mt-2 text-xl font-bold tracking-tight text-gray-700 sm:text-xl">{{__("The 2025 program is practically finalized. If anything changes, we'll be sure to let you know.")}}</p>
            <p class="fadinAnimation opacity-0 mt-2 text-lg font-normal tracking-tight text-gray-700 sm:text-lg">{{__('Each session runs from +/- 1pm to 6pm.  The schedule may vary according to the number of participants and the number of available pitches. A detailed schedule will be provided to each participating team a few days before the session for which they are registered.')}}</p>
          </div>
          <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-y-5 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-2 fadinAnimation opacity-0">
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Welpadel Welkenraedt')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('14/3/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Rue Chant des Oiseaux 13, 4840 Welkenraedt')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Arenal Waregem')}}<x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('21/3/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Franklin Rooseveltlaan 155, 8790 Waregem')}}</span> <br/><br/>
                </dd>
              </div>
              <div class="relative pl-10">
                <dt class="text-base font-semibold leading-7 text-gray-900">
                  <div class="absolute top-0 left-0 flex h-6 w-6 items-center justify-center rounded-lg bg-dark-blue">
                    <svg class=" h-4 w-4 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                    </svg>
                  </div>
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Tero Louise')}}<x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> Tenerife ({{__('find out more about this session')}})<x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Planet Padel')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Mokko Padel')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Tour & Taxis Padel Club')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Arenal Mechelen')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Tero Waterloo')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Arenal Grimbergen')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Arenal Brugge')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Arenal Bree')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('13/6/2025')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('Watertorenstraat 16, 3960 Bree')}}</span> <br/><br/>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Arenal Antwerp')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('Eleven Nivelles')}}<x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm">{{__('Friday')}} {{__('20/6/2025 ')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('rue de l’industrie 11 – 1400 Nivelles')}}</span> <br/><br/>
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
                  <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}"  target="blank" class="color-dark-blue"> {{__('The final')}} <x-icon.cart class="text-pink-600 h-7 w-7 inline" /> </a>
                </dt>
                <dd class="mt-0 text-base leading-7 text-gray-600">
                  <b class="text-sm"> {{__('When')}}: </b> <span class="text-sm"> {{__('15-16/8/2025 ')}}</span><br/>
                  <b class="text-sm">{{__('Place')}}: </b> <span class="text-sm">{{__('TBD')}}</span> <br/><br/>
                  {{-- Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget.<br/> --}}
                </dd>
              </div>
              
            </dl>
          </div>
          <div class="mx-auto max-w-2xl lg:text-center">
            <p class="fadinAnimation opacity-0 mt-2 text-lg font-normal tracking-tight text-gray-700 sm:text-lg">{!!__("We'll do our best to accommodate everyone, but we're limited by the number of plots available. First come, first served!")!!}</p>
          </div>
          <p class="text-center pt-10">
            <a href="{{url('/').'/'.App::currentLocale().'/'.__('route.register')}}" class="fadinAnimation opacity-0 inline-block rounded-full border-blue-900 border bg-white px-3.5 py-3 text-center text-base font-semibold text-blue-900 shadow-sm hover:bg-blue-900 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">
              {{__("I get it, I'm in!")}}
              <x-icon.right class="h-4"/>
            </a>
          </p>
        </div>
      </div>
      @livewire('price', key('price'))
    </main>
  </div>