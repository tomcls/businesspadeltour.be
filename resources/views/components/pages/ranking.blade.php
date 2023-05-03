<x-layouts.home>
    <!-- This example requires Tailwind CSS v3.0+ -->
<!-- This example requires Tailwind CSS v3.0+ -->
<div class="isolate bg-white">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
        <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
        <defs>
          <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
            <stop stop-color="#9089FC"></stop>
            <stop offset="1" stop-color="#FF80B5"></stop>
          </linearGradient>
        </defs>
      </svg>
    </div>
    <x-layouts.menu >
    </x-layouts.menu>
    <main>
      @livewire('ranking')
    </main>
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
      <div class="flex flex-1 mt-10">
        <ul role="list" class="sm:grid sm:grid-cols-6   sm:gap-4 sm:items-center justify-center  sm:border-t sm:border-gray-200 sm:py-5   space-x-12">
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
          <li>
            <a href="https://www.royalzoutetennisclub.be/" target="_blank" ><img class="mx-auto w-50 items-center justify-center mt-7" src="{{url('/').'/images/clubs/zoute.jpg'}}" alt=""></a>
          </li>
          <!-- More people... -->
        </ul>
      </div>
    </div>
  </div>
  
</x-layouts.home>