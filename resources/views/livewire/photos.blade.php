<div x-data="{
    openMenu:true
    }" x-init="loadImages(); setTimeout(function(){openMenu = false;},500)">
<div   x-show="openMenu" class="relative z-10 " aria-labelledby="slide-over-title" role="dialog" aria-modal="true"  >
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0"></div>
  
    <div  class="fixed inset-0 overflow-hidden">
      <div class="absolute inset-0 overflow-hidden">
        <div class="pointer-events-none fixed inset-y-0 left-0 flex max-w-full pr-10 ">
          <!--
            Slide-over panel, show/hide based on slide-over state.
  
            Entering: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
          <div x-show="openMenu" @click.away="openMenu = false"
          x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" 
          x-transition:enter-start="-translate-x-full" 
          x-transition:enter-end="translate-x-0" 
          x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" 
          x-transition:leave-start="translate-x-0" 
          x-transition:leave-end="-translate-x-full"  

          class="pointer-events-auto w-screen max-w-md">
            <div class="flex h-full flex-col overflow-hidden bg-white py-6 shadow-xl">
              <div class="px-4 sm:px-6">
                <div class="flex items-start justify-between">
                  <h2 class="text-base font-semibold text-gray-900" id="slide-over-title"></h2>
                  <div class="ml-3 flex h-7 items-center">
                    <button @click="openMenu=!openMenu" type="button" class="relative rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                      <span class="absolute -inset-2.5"></span>
                      <span class="sr-only">Close panel</span>
                     <x-icon.x class="text-black h-7 w-7 cursor-pointer"  />
                    </button>
                  </div>
                </div>
              </div>
              <div class="relative mt-6 flex-1 px-4 sm:px-6">
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                      <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            @php
                                $startYear = 2023;
                                $endYear = now()->format('Y');
                                $y = $endYear;
                            @endphp
                            @while ($y >= $startYear)
                            <li>
                                <div x-data="{
                                open:{{$selectedYear == $y ? 'true':'false'}}
                                }">
                                  <button @click="open=!open" type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm/6 font-semibold text-gray-700 hover:bg-gray-50" aria-controls="sub-menu-1" aria-expanded="false">
                                    <!-- Expanded: "rotate-90 text-gray-500", Collapsed: "text-gray-400" -->
                                    <svg  :class="open ? 'h-5 w-5 shrink-0 text-gray-500 rotate-90' : 'h-5 w-5 shrink-0 text-gray-400 '" class="h-5 w-5 text-gray-400"  viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                      </svg>
                                    {{$y}}
                                  </button>
                                  <!-- Expandable link section, show/hide based on state. -->
                                  <ul  x-show="open" class="mt-1 px-2" id="sub-menu-1" style="display: none;" >
                                    @foreach ($sessions as $session)
                                        @if (\Carbon\Carbon::parse($session->startdate)->format('Y') == $y)
                                        <li>
                                            <a href="{{route('photos',['session_id' => $session->id])}}" class="block rounded-md py-2 pl-9 pr-2 text-sm/6 text-gray-700 hover:bg-gray-50 {{$session->id == $this->sessionId ? 'font-bold': ''}}">{{$session->club_name}} {{\Carbon\Carbon::parse($session->startdate)->format('d-m-Y')}}</a>
                                        </li>
                                        @endif
                                    @endforeach
                                  </ul>
                                </div>
                              </li>
                                @php
                                    $y --;
                                @endphp
                            @endwhile
                        </ul>
                      </li>
                    </ul>
                  </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
    <h1 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl mb-10">{{$this->session->club_name}} {{\Carbon\Carbon::parse($this->session->startdate)->format('d-m-Y')}}</h1>
    @if ($this->session->zip_file)
    <div class=" py-4 ">
      <a target="_blank" class="font-bold text-md  color-light-blue" href="https://itcl.s3.eu-west-1.amazonaws.com/businesspadeltour/zips/{{$this->session->zip_file}}">{{__('Download All')}}</a>
    </div>
        
    @endif
    <div class="-m-1 flex flex-wrap md:-m-2">
        @foreach ($images as $i => $img)
            <div class="flex w-1/3 sm:w-1/4 flex-wrap">
                <div class="w-full p-1 md:p-2" wire:ignore>
                    <a href="#" wire:click.prevent="$set('showEditModal', true)" @click="window.carousel.slideTo({{$i}})" >
                        <img
                        alt="gallery"
                        class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{env('APP_URL').'/images/logo/logo-img.png'}}"
                        data-src="{{$img->url('medium')}}" />
                    </a>
                </div>
            </div>
            @endforeach
    </div>
  </div>

  <div  wire:ignore>
    <x-modal.dialog wire:model.defer="showEditModal">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <div  class="relative w-full " >
                <div class="relative h-56 overflow-hidden rounded-lg md:h-screen ">
                    @foreach ($images as $i => $img)
                        <div class="containerImage hidden duration-700 ease-in-out" id="carousel-item-{{($i+1)}}"  >
                            <img src="{{env('APP_URL').'/images/logo/logo-img.png'}}" data-src="{{$img->url('large')}}"  class="absolute block object-cover object-center sm:h-screen   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." wire:click.prevent="$set('showEditModal', false)">
                        </div>
                    @endforeach
                </div>
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
            <button wire:click="$set('showEditModal', false)" type="button" class="hidden sm:block bottom-16 right-7 absolute z-50 rounded-full bg-pink-600 p-2 text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg fill="" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
              </button>
        </x-slot>
    
        <x-slot name="footer">
            
            
        </x-slot>
    </x-modal.dialog>
</div>
  <button class="bg-pink-600 rounded-full py-2 px-2 fixed bottom-3 left-3 z-0">
      <x-icon.list class="h-8 w-8 text-white  " @click="openMenu=!openMenu" />
  </button>
  <script>
    window.onload = function() {
      const items = [];
        for (let index = 0; index < {{$images->count()}}; index++) {
            console.log(index)
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