<x-layouts.home>
    <!-- This example requires Tailwind CSS v3.0+ -->
<!-- This example requires Tailwind CSS v3.0+ -->
<div class="isolate bg-white">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
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
    <main class="py-10">
        <div class="relative px-6 pt-16 pb-20 lg:px-8 lg:pt-36 lg:pb-28">
            
            <div class="relative mx-auto max-w-7xl">
              <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight color-dark-blue sm:text-4xl">L'actu</h2>
                <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p>
              </div>
              <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                @foreach ($articles as $a)
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                      <img class="h-48 w-full object-cover" src="{{$a['image']}}" alt="">
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                      <div class="flex-1">
                        <a href="{{url('/').'/'.App::currentLocale().'/article/'.$a['slug']}}" class="mt-2 block">
                          <p class="text-xl font-semibold text-gray-900">{{$a['title']}}</p>
                          <p class="mt-3 text-base text-gray-500">{{$a['subtitle']}}</p>
                        </a>
                      </div>
                    </div>
                  </div>
                @endforeach
                
          
                
              </div>
            </div>
          </div>
          
       
    </main>
  </div>
  
</x-layouts.home>