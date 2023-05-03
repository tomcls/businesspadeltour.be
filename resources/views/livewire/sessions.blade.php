
<div wire:ignore x-data="{}"
x-init="">
    
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <h1 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl mb-10">{{ucFirst(__('route.sessions'))}} Tour & Taxi</h1>
        <h2 class="text-xl  tracking-tight text-gray-400 sm:text-xl mb-10">{{__('home.clubContent1')}} {{__('home.agendaWhen1')}}</h2>
        <div class="-m-1 flex flex-wrap md:-m-2">
            @for ($i = 1; $i < 138; $i++)
                <div class="flex w-1/3 sm:w-1/4 flex-wrap">
                    <div class="w-full p-1 md:p-2">
                        <a href="#" wire:click.prevent="$set('showEditModal', true)" @click="window.carousel.slideTo({{$i-1}})" >
                            <img
                            alt="gallery"
                            class="block h-full w-full rounded-lg object-cover object-center"
                            src="{{url('/').'/images/sessions/session1_'.$i.'.jpg'}}" />
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    

    <x-modal.dialog wire:model.defer="showEditModal">
        <x-slot name="title"></x-slot>
    
        <x-slot name="content">
            <div  class="relative w-full" >
                <!-- Carousel wrapper -->
                
                <div class="relative h-56 overflow-hidden rounded-lg md:h-screen">
                    @for ($i = 1; $i < 140; $i++)
                     <!-- Item 1 -->
                        <div class="containerImage hidden duration-700 ease-in-out" id="carousel-item-{{$i}}"  >
                            <img src="{{url('/').'/images/sessions/session1_'.$i.'.jpg'}}"  class="absolute block sm:h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." wire:click.prevent="$set('showEditModal', false)">
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
        </x-slot>
    
        <x-slot name="footer">
            {{-- <x-button.secondary wire:click="$set('showEditModal', false)"></x-button.secondary> --}}
            
            
        </x-slot>
    </x-modal.dialog>


    <script>
        window.onload = function() {

          const items = [];
            for (let index = 0; index < 139; index++) {
                
                items.push({
                    position: index,
                    el: document.getElementById('carousel-item-'+(index+1))
                })
            }
            console.log(items)
            window.options = {
                defaultPosition: 1,
                interval: 3000,
                
                // callback functions
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
