<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <p class="text-base font-semibold text-indigo-600">{{__('Successful payment')}}</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">{{__('Thank you very much!')}}</h1>
      <p class="mt-6 text-base leading-7 text-gray-600">{!!__('You can download your invoice by clicking :here',['here'=>"<a target='blank' href=".route('invoice',['id'=>$invoice->id,'t'=>$invoice->intent])." class='text-indigo-600 font-black'>".__('here')."</a>"])!!} </p>
    </div>
  </main>