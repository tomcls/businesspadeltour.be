<div  x-init="loadImages();
Livewire.on('loadImages', () => {
  loadImages();
})">
    <footer class="bg-white py-20 mt-0">
      <div class="bg-white " id="sponsor">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="fadinAnimation opacity-0 text-pretty text-5xl font-medium tracking-tight  sm:text-6xl color-dark-blue pb-7">{{__('An organization of')}}</h2>
          </div>
          <div class="flex flex-1 mt-10">
            <ul role="list" class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center justify-center  sm:border-t sm:border-gray-200 sm:py-5   sm:space-x-12 fadinAnimation opacity-0">
              <li>
                <a href="https://vertuosa.be/"  target="_blank" ><img class="mx-auto  items-center justify-center mt-7 h-20" src="{{url('/').'/images/sponsors/Vertuoza-Logo.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://brugge.arenal.be/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7 h-28" src="https://brugge.arenal.be/themes/custom/arenal/logo-new.svg" alt=""></a>
              </li>
              <li>
                <a href="/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7 h-28" src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/bpt-logo.png"  alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-white pt-20" >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="fadinAnimation opacity-0 text-pretty text-5xl font-medium tracking-tight  sm:text-6xl color-dark-blue pb-7">{{__('In partnership with')}}</h2>
          </div>
          <div class="flex flex-1 mt-10">
            <ul role="list" class="sm:grid sm:grid-cols-5  sm:gap-4 sm:items-center justify-center  sm:border-t sm:border-gray-200 sm:py-5   sm:space-x-12 fadinAnimation opacity-0">
              <li>
                <a href="https://wilmeyer.com/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/sponsors/wilmeyer.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://immo.vlan.be/fr" target="_blank"  ><img class="mx-auto items-center justify-center mt-7" src="{{url('/').'/images/sponsors/immovlan_mauve.png'}}"  alt=""></a>
              </li>
              <li>
                <a href="https://santospalaceshop.be/bruxelles/" target="_blank"  ><img class="mx-auto  max-h-20 items-center justify-center mt-7" src="{{url('/').'/images/sponsors/santos.png'}}" alt=""></a>
              </li>
              <li>
                <a href="https://www.cupra.be/fr" target="_blank" ><img class="mx-auto items-center justify-center mt-7 h-44 w-72" src="https://www.cupra.be/images/logo.svg" alt=""></a>
              </li>
              <li>
                <a href="https://www.vandelanotte.be/" target="_blank"  ><img class="mx-auto items-center justify-center mt-7 h-10" src="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/vandelanotte.png" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bg-white " id="sponsor">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="fadinAnimation opacity-0 text-pretty text-5xl font-medium tracking-tight  sm:text-6xl color-dark-blue pb-7">{{__('The clubs')}}</h2>
          </div>
          <div class="flex flex-1 mt-10">
            <ul role="list" class="sm:grid sm:grid-cols-6  sm:gap-4 sm:items-center justify-center  sm:border-t sm:border-gray-200 sm:py-5   sm:space-x-12 fadinAnimation opacity-0">
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
      </footer>
</div>
