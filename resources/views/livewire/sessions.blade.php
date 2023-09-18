
<div  x-data="{

}" x-init="loadImages()">

    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div>
            <div class="sm:hidden">
              <label for="tabs" class="sr-only">Select a tab</label>
              <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
              <select id="tabs" name="tabs"  wire:model="tab"  class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-dark-blue focus:outline-none focus:ring-indigo-500 sm:text-sm">
                <option value="toursandtaxi"  >{{ucFirst(__('sessions.tournoi'))}} Tours & Taxi</option>
                <option value="liege" >{{ucFirst(__('sessions.tournoi'))}} Liège</option>
                <option value="nivelles" >{{ucFirst(__('sessions.tournoi'))}} Nivelles</option>
                <option value="knokke" >{{ucFirst(__('sessions.knokke'))}} Knokke</option>
              </select>
            </div>
            <div class="hidden sm:block">
              <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                  <!-- Current: "border-dark-blue color-dark-blue", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                  <a href="#" wire:click="$set('tab', 'toursandtaxi')" class="{{$tab =='toursandtaxi' ? 'border-dark-blue color-dark-blue' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'}}  whitespace-nowrap border-b-2 py-4 px-1 text-md font-medium" aria-current="page">{{ucFirst(__('sessions.tournoi'))}} Tours & Taxi</a>
                  <a href="#" wire:click="$set('tab', 'liege')" class=" {{$tab =='liege' ? 'border-dark-blue color-dark-blue' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'}}  whitespace-nowrap border-b-2 py-4 px-1 text-md font-medium">{{ucFirst(__('sessions.tournoi'))}} Liège</a>
                  <a href="#" wire:click="$set('tab', 'nivelles')" class=" {{$tab =='nivelles' ? 'border-dark-blue color-dark-blue' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'}}  whitespace-nowrap border-b-2 py-4 px-1 text-md font-medium">{{ucFirst(__('sessions.tournoi'))}} Nivelles</a>
                  <a href="#" wire:click="$set('tab', 'knokke')" class=" {{$tab =='knokke' ? 'border-dark-blue color-dark-blue' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'}}  whitespace-nowrap border-b-2 py-4 px-1 text-md font-medium">{{ucFirst(__('sessions.tournoi'))}} Knokke</a>
                </nav>
              </div>
            </div>
        </div>
        <div class=" {{$tab!='toursandtaxi'?'hidden':''}}">
            <h1 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl mb-10"></h1>
            <h2 class="text-xl  tracking-tight text-gray-400 sm:text-xl mb-10">{{__('sessions.tournoi')}} {{__('home.agendaWhen1')}}</h2>
            <div  class="mb-10 pt-10  text-sm font-semibold"><a class="text-blue-500" href="{{env('APP_URL').'/images/toursandtaxi.zip'}}">{{__('sessions.download')}}</a></div>

            <div class="-m-1 flex flex-wrap md:-m-2">
                @for ($i = 1; $i < 139; $i++)
                    <div class="flex w-1/3 sm:w-1/4 flex-wrap">
                        <div class="w-full p-1 md:p-2"  wire:ignore>
                            <a href="#" wire:click.prevent="$set('showEditModal', true)" @click="window.carousel.slideTo({{$i-1}})" >
                                <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center" src="{{env('APP_URL').'/images/logo/logo-img.png'}}" data-src="{{env('APP_URL').'/images/sessions/session1_'.$i.'.jpg'}}" />
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div  class=" {{$tab!='liege'?'hidden':''}}">
            <h1 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl mb-10"></h1>
            <h2 class="text-xl  tracking-tight text-gray-400 sm:text-xl mb-10">{{__('sessions.tournoi')}} {{__('home.agendaWhen2')}}</h2>
            <div  class="mb-10 pt-10  text-sm font-semibold"><a class="text-blue-500" href="{{env('APP_URL').'/images/liege.zip'}}">{{__('sessions.download')}}</a></div>

            <div class="-m-1 flex flex-wrap md:-m-2">
                @for ($i = 140; $i < 259; $i++)
                    <div class="flex w-1/3 sm:w-1/4 flex-wrap">
                        <div class="w-full p-1 md:p-2" wire:ignore>
                            <a href="#" wire:click.prevent="$set('showEditModal', true)" @click="window.carousel.slideTo({{$i-1}})" >
                                <img
                                alt="gallery"
                                class="block h-full w-full rounded-lg object-cover object-center"
                                src="{{env('APP_URL').'/images/logo/logo-img.png'}}"
                                data-src="{{env('APP_URL').'/images/sessions/session1_'.$i.'.jpg'}}" />
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div  class=" {{$tab!='nivelles'?'hidden':''}}">
            <h1 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl mb-10"></h1>
            <h2 class="text-xl  tracking-tight text-gray-400 sm:text-xl mb-10">{{__('sessions.tournoi')}} {{__('home.agendaWhen4')}}</h2>
            <div  class="mb-10 pt-10  text-sm font-semibold"><a class="text-blue-500" href="{{env('APP_URL').'/images/nivelles.zip'}}">{{__('sessions.download')}}</a></div>
            <div class="-m-1 flex flex-wrap md:-m-2">
                @for ($i = 261; $i < 340; $i++)
                    <div class="flex w-1/3 sm:w-1/4 flex-wrap" wire:ignore>
                        <div class="w-full p-1 md:p-2">
                            <a href="#" wire:click.prevent="$set('showEditModal', true)" @click="window.carousel.slideTo({{$i-1}});loadImages()" >
                                <img
                                alt="gallery"
                                class="block h-full w-full rounded-lg object-cover object-center"
                                src="{{env('APP_URL').'/images/logo/logo-img.png'}}"
                                data-src="{{env('APP_URL').'/images/sessions/session1_'.$i.'.jpg'}}" />
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div  class=" {{$tab!='knokke'?'hidden':''}}">
            <h1 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl mb-10"></h1>
            <h2 class="text-xl  tracking-tight text-gray-400 sm:text-xl mb-10">{{__('sessions.tournoi')}} {{__('home.agendaWhen4')}}</h2>
            <div  class="mb-10 pt-10  text-sm font-semibold"><a class="text-blue-500" href="{{env('APP_URL').'/images/knokke.zip'}}">{{__('sessions.download')}}</a></div>
            <div class="-m-1 flex flex-wrap md:-m-2">
                @for ($i = 341; $i < 502; $i++)
                    <div class="flex w-1/3 sm:w-1/4 flex-wrap" wire:ignore>
                        <div class="w-full p-1 md:p-2">
                            <a href="#" wire:click.prevent="$set('showEditModal', true)" @click="window.carousel.slideTo({{$i-1}});loadImages()" >
                                <img
                                alt="gallery"
                                class="block h-full w-full rounded-lg object-cover object-center"
                                src="{{env('APP_URL').'/images/logo/logo-img.png'}}"
                                data-src="{{env('APP_URL').'/images/sessions/session1_'.$i.'.jpg'}}" />
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div  wire:ignore>

        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title"></x-slot>
        
            <x-slot name="content">
                <div  class="relative w-full" >
                    <!-- Carousel wrapper -->
                    
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-screen">
                        @for ($i = 1; $i < 502; $i++)
                         <!-- Item 1 -->
                            <div class="containerImage hidden duration-700 ease-in-out" id="carousel-item-{{$i}}"  >
                                <img src="{{env('APP_URL').'/images/sessions/session1_'.$i.'.jpg'}}"  class="absolute block sm:h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." wire:click.prevent="$set('showEditModal', false)">
                            </div>
                        @endfor
                    </div>
                    <!-- Slider controls -->
                    <button type="button" id="data-carousel-prev" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" >
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" id="data-carousel-next" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" >
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <button wire:click="$set('showEditModal', false)" type="button" class="hidden sm:block bottom-7 right-7 absolute z-50 rounded-full bg-blue-600 p-2 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg fill="" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                  </button>
            </x-slot>
        
            <x-slot name="footer">
                
                
            </x-slot>
        </x-modal.dialog>
    </div>

    
    <script>
        window.onload = function() {
            console.log('onload')
          const items = [];
            for (let index = 0; index < 501; index++) {
                
                items.push({
                    position: index,
                    el: document.getElementById('carousel-item-'+(index+1))
                })
            }
            window.options = {
                defaultPosition: 1,
                interval: 3000,
                onNext: () => {
                    console.log('next slider item is shown');
                },
                onPrev: ( ) => {
                    console.log('previous slider item is shown');
                },
                onChange: ( ) => {
                    console.log('new slider item has been shown');
                }
            };
            window.carousel = new Carousel(items, window.options);

            document.getElementById('data-carousel-next').addEventListener("click", function() {
                carousel.next();
            });
            document.getElementById('data-carousel-prev').addEventListener("click", function() {
                carousel.prev();
            });
        };
    </script>
</div>
