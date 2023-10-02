
<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    
    <form wire:submit.prevent="save">
        <div class="space-y-12 mt-5">
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-xl font-semibold leading-7 text-gray-900 py-5 pb-10 ">{{__('contact.title')}}</h1>

                <h2 class="text-base font-semibold leading-7 text-gray-900">{{__('contact.persoInfo')}}</h2>
        
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="contact.firstname" class="block text-sm font-medium leading-6 text-gray-900">{{__('contact.firstname')}}</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.firstname' name="contact.firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.firstname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
        
                    <div class="sm:col-span-3">
                        <label for="contact.lastname" class="block text-sm font-medium leading-6 text-gray-900">{{__('contact.lastname')}}</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.lastname' name="contact.lastname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.lastname') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="contact.email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.email' name="contact.email" id="contact.email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.email') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
        
                    <div class="sm:col-span-3">
                        <label for="contact.phone" class="block text-sm font-medium leading-6 text-gray-900">{{__('contact.phone')}}</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.phone' name="contact.phone" id="contact.phone"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.phone') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <h2 class="text-base font-semibold leading-7 text-gray-900 mt-5">{{__('contact.companyInfo')}}</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="contact.company_name" class="block text-sm font-medium leading-6 text-gray-900">{{__('contact.companyname')}}</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.company_name' name="contact.company_name" id="contact.company_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.company_name') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
        
                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">{{__('contact.companyvat')}}</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.company_vat' name="last-name" id="last-name"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.company_vat') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>

        
                    <div class="sm:col-span-4">
                        <label for="company_address" class="block text-sm font-medium leading-6 text-gray-900">{{__('contact.address')}}</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.company_address' name="company_address" id="company_address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.company_address') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
        
                    <div class="sm:col-span-2">
                        <label for="contact.company_zip" class="block text-sm font-medium leading-6 text-gray-900">{{__('contact.zip')}}</label>
                        <div class="mt-2">
                            <input type="text" wire:model='contact.company_zip' name="contact.company_zip" id="contact.company_zip" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('contact.company_zip') <div class="mt-1 text-red-500 text-xs">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('contact.signup')}}</button>
        </div>
    </form>
    @if($saved)
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
      <!--
        Background backdrop, show/hide based on modal state.
    
        Entering: "ease-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    
      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <!--
            Modal panel, show/hide based on modal state.
    
            Entering: "ease-out duration-300"
              From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              To: "opacity-100 translate-y-0 sm:scale-100"
            Leaving: "ease-in duration-200"
              From: "opacity-100 translate-y-0 sm:scale-100"
              To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          -->
          <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
            <div>
              <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
              </div>
              <div class="mt-3 text-center sm:mt-5">
                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">{{__('contact.success')}}</h3>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">{{__('contact.successTeaser')}}</p>
                  <p class="text-sm text-gray-500">{{__('contact.successTeaser2')}}</p>
                </div>
              </div>
            </div>
            <div class="mt-5 sm:mt-6">
              <a href="{{url('/').'/'.App::currentLocale().''}}" class="inline-flex w-full justify-center rounded-md border border-transparent bg-dark-blue px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-dark-blue focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:text-sm">Okay!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  @endif
</div>