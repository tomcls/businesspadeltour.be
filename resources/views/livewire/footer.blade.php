<div  x-init="loadImages();
Livewire.on('loadImages', () => {
  loadImages();
})">
    <footer class="bg-gray-900 py-20 mt-0">
        
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
      </footer>
</div>
