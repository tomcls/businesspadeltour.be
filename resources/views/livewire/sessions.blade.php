
<div>
    
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <h1 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl mb-10">{{ucFirst(__('route.sessions'))}} Tour & Taxi</h1>
        <div class="-m-1 flex flex-wrap md:-m-2">
            @for ($i = 1; $i < 139; $i++)
                <div class="flex w-1/3 sm:w-1/4 flex-wrap">
                    <div class="w-full p-1 md:p-2">
                        <a href="#" wire:click.prevent="$set('showEditModal', true)" >
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
            <div
                id="carouselExampleCaptions"
                class="relative"
                data-te-carousel-init
                data-te-carousel-slide
                >
                <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%]  mb-4  list-none justify-center p-0 hidden"
                    data-te-carousel-indicators>
                    @for ($i = 0; $i < 139; $i++)
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide-to="{{$i}}"
                        data-te-carousel-active
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-current="true"
                        aria-label="Slide {{$i}}"></button>
                    @endfor
                    
                </div>
                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] " >
                    @for ($i = 1; $i < 139; $i++)
                    <div
                        class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        @if ($i == 1)
                            data-te-carousel-active
                        @endif
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <div class=" w-full h-screen mx-auto" style="background-position: 50%; text-align: center">
                            <a href="" wire:click.prevent="$set('showEditModal', false)">
                                <img src="{{url('/').'/images/sessions/session1_'.$i.'.jpg'}}" class="object-cover  h-full mx-auto" />
                            </a>
                        </div>
                    </div>
                    @endfor
                    <button
                        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </span>
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                    </button>
                    <button
                        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"> Next</span>
                    </button>
            </div>
        </x-slot>
    
        <x-slot name="footer">
            {{-- <x-button.secondary wire:click="$set('showEditModal', false)"></x-button.secondary> --}}
            
            
        </x-slot>
    </x-modal.dialog>
</div>

