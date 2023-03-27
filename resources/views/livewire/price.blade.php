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
              <a href="https://www.newb19.be/home"  target="_blank" > <img class="mx-auto w-50 " src="{{url('/').'/images/sponsors/b19.png'}}" alt=""></a>
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
        <div class="flex flex-1 items-center justify-center w-100 flex-row mt-10">
          <ul role="list" class="items-center justify-center inline-flex space-x-12">
            <li>
              <a href="https://tour-taxis.com/fr/event/world-padel-tour-2023-gare-maritime/" target="_blank"  ><img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/clubs/padelclub.png'}}" alt=""></a>
            </li>
            <li>
              <a href="https://www.tereiken.be/"  target="_blank" ><img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/clubs/tereiken.png'}}" alt=""></a>
            </li>
            <li>
              <a href="https://planetpadel.be/" target="_blank"  ><img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/clubs/planetpadel.png'}}" alt=""></a>
            </li>
            <li>
              <a href="https://garrincha.be/" target="_blank" ><img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/clubs/garrincha.jpg'}}" alt=""></a>
            </li>
            <li>
              <a href="https://elevenpadel.be/" target="_blank" ><img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/clubs/eleven.jpg'}}" alt=""></a>
            </li>
            <!-- More people... -->
          </ul>
        </div>
      </div>
    </div>
  </div>