<x-layouts.home>
    <!-- This example requires Tailwind CSS v3.0+ -->
<!-- This example requires Tailwind CSS v3.0+ -->
<div class="article " x-init="animate();">
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
    <main>
      <!--
        This example requires some changes to your config:
        
        ```
        // tailwind.config.js
        module.exports = {
          // ...
          plugins: [
            // ...
            require('@tailwindcss/typography'),
          ],
        }
        ```
      -->
      <div class="relative overflow-hidden  py-16">
        <div class="hidden lg:absolute lg:inset-y-0 lg:block lg:h-full lg:w-full lg:[overflow-anchor:none]">
          <div class="relative mx-auto h-full max-w-prose text-lg" aria-hidden="true">
            <svg class="absolute top-12 left-full translate-x-32 transform" width="404" height="384" fill="none" viewBox="0 0 404 384">
              <defs>
                <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
              </defs>
              <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
            </svg>
            <svg class="absolute top-1/2 right-full -translate-y-1/2 -translate-x-32 transform" width="404" height="384" fill="none" viewBox="0 0 404 384">
              <defs>
                <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
              </defs>
              <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute bottom-12 left-full translate-x-32 transform" width="404" height="384" fill="none" viewBox="0 0 404 384">
              <defs>
                <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
              </defs>
              <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
            </svg>
          </div>
        </div>
        <div class="relative px-6 lg:px-8">
          <div class="mx-auto max-w-prose text-lg">
            <h1>
              <span class="mt-2 block text-center text-3xl font-bold leading-8 tracking-tight color-dark-blue sm:text-4xl">{{$article['intro_title']}}</span>
            </h1>
            <p class="mt-8 text-xl leading-8 text-gray-500">{{$article['intro_subtitle']}}</p>
          </div>
          <div class="prose prose-lg prose-indigo mx-auto mt-6 text-gray-500">
            {!!$article['content']!!}
          </div>
        </div>
      </div>

     
      @livewire('footer', key('footer'))

    </main>
  </div>
  
</x-layouts.home>