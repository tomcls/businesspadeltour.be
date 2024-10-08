<div
x-data='{
    login: function() {
        let o = {
        "event": "login",
        "page_language":  "{{App::currentLocale()}}",
        }
        dataLayer.push(o);
      },
      register: function() {
          let o = {
          "event": "register",
          "page_language":  "{{App::currentLocale()}}",
          }
          dataLayer.push(o);
        }
}'>
    
      <div class="">
        <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
          <a  wire:click="openTab('login')" class="{{$tab == 'login' ? 'cursor-pointer text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10':'cursor-pointer  text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10'}} ">
            <span>{{__('sign in')}}</span>
            <span aria-hidden="true" class="{{$tab == 'login' ? 'bg-vwblue absolute inset-x-0 bottom-0 h-0.5': 'bg-transparent absolute inset-x-0 bottom-0 h-0.5' }}"></span>
          </a>
          <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
          <a  wire:click="openTab('register')" class="{{$tab == 'register' ? 'cursor-pointer text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10':'cursor-pointer  text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10'}} ">
            <span>{{__('Signup')}}</span>
            <span aria-hidden="true" class="{{$tab == 'register' ? 'bg-vwblue absolute inset-x-0 bottom-0 h-0.5': 'bg-transparent absolute inset-x-0 bottom-0 h-0.5' }}"></span>
          </a>
        </nav>
      </div>
    <div class="{{$tab=='register' ? '': 'hidden' }} mt-5 ">
        <form wire:submit.prevent="register"  method="POST" class="space-y-2">
            
            <x-input.group   label="{{__('Firstname')}}" for="firstname"  :error="$errors->first('firstname')">
                <x-input.text wire:model="firstname"  >
                    <x-slot:leadingIcon>
                            <x-icon.user class="text-sky-600 cursor-pointer h-6 w-6 " />
                    </x-slot:trailingAddOn>
                </x-input.text>
            </x-input.group>
            <x-input.group   label="{{__('Lastname')}}" for="lastname"  :error="$errors->first('lastname')">
                <x-input.text wire:model="lastname"  >
                    <x-slot:leadingIcon>
                            <x-icon.user class="text-sky-600 cursor-pointer h-6 w-6 " />
                    </x-slot:trailingAddOn>
                </x-input.text>
            </x-input.group>
            <x-input.group   label="{{__('Email')}}" for="email"  :error="$errors->first('email')">
                <x-input.text wire:model="email"  >
                    <x-slot:leadingIcon>
                            <x-icon.mail class="text-sky-600 cursor-pointer h-6 w-6 " />
                    </x-slot:trailingAddOn>
                </x-input.text>
            </x-input.group>
            <x-input.group   label="{{__('Password')}}" for="password"  :error="$errors->first('password')">
                <x-input.text wire:model="password" type="{{$passwordType}}" >
                    <x-slot:trailingAddOn>
                        <button type="button" wire:click='changeType' class="absolute inset-y-0 right-0 flex items-center  px-2">
                            <x-icon.eye class="text-sky-600 cursor-pointer h-6 w-6 " />
                          </button>
                    </x-slot:trailingAddOn>
                </x-input.text>
            </x-input.group>
            <div class="flex flex-row space-x-2">
                <div class="captcha">
                    <span>{!! $captchaImage !!}</span>
                    
                </div><button wire:click='reloadCaptcha' type="button" class="btn btn-danger" class="reload" id="reload">
                    <x-icon.rotate class="text-pink-600" />
                </button>
            </div>
            <x-input.group   label="{!!__('Captcha')!!}" for="captcha"  :error="$errors->first('captcha')">
                <x-input.text wire:model="captcha" />
            </x-input.group>
            <div class="relative flex items-start mt-3">
                <div class="flex h-6 items-center">
                  <input wire:model="tos" id="tos" aria-describedby="tos" name="tos" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-vwblue focus:ring-vwblue">
                </div>
                
                <div class="ml-3 text-sm leading-6">
                  <label for="tos-info" class="font-medium text-gray-900">{{__('I accept the terms and conditions')}}</label>
                  {{-- <p id="tos-info" class="text-gray-500 text-xs"><a target="blank" href="{{route(__('static.generalCondition'))}}" class="cursor-pointer text-sky-600">{{__("I hereby consent to the processing of my personal data for this purpose in accordance with Vacancesweb's privacy policy.")}}</a></p> --}}
                </div>
            </div>
            <div class="relative flex items-start mt-3">
                <div class="flex h-6 items-center">
                  <input wire:model="newsletter" id="newsletter" aria-describedby="newsletter" name="newsletter" type="checkbox" class="h-4 w-4 rounded border-gray-300 text--vwblue focus:ring-vwblue">
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label for="tos-info" class="font-medium text-gray-900">{{__("I subscribe to the newsletter")}}</label>
                </div>
            </div>
            <div class="">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" @click="register()" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-vwblue hover:bg-vwblue focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        {{__('Confirm')}}
                    </button>
                </span>
            </div>

            <div class="">
                <span class="block w-full rounded-md shadow-sm text-green-600 text-sm">
                   {{$message}}
                </span>
            </div>
        </form>
    </div>
    <div class="{{$tab=='login' ? '': 'hidden' }} mt-5">
        {{md5('Mila4ever$')}}
        <form wire:submit.prevent="login" action="#" method="POST">
            <x-input.group   label="{{__('Email')}}" for="email"  :error="$errors->first('email')">
                <x-input.text wire:model="email"  >
                    <x-slot:leadingIcon>
                            <x-icon.mail class="text-sky-600 cursor-pointer h-6 w-6 " />
                    </x-slot:trailingAddOn>
                </x-input.text>
            </x-input.group>
            <x-input.group   label="{{__('Password')}}" for="password"  :error="$errors->first('password')">
                <x-input.text wire:model="password" type="{{$passwordType}}" />
            </x-input.group>
            <div class="relative flex items-start mt-3">
                <div class="flex h-6 items-center">
                  <input wire:model="remember" id="remember" aria-describedby="remember" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-vwblue focus:ring-vwblue">
                </div>
                <div class="ml-3 text-sm leading-6">
                  <label for="remember-info" class="font-medium text-gray-900">{{__('Remember me')}}</label>
                  <p id="remember-info" class="text-gray-500 text-xs">{{__('The data will be permanently stored in your web browser.')}}</p>
                </div>
            </div>

            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" @click="login()" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-vwblue hover:bg-vwblue focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        {{__('sign in')}}
                    </button>
                </span>
            </div>
            {{-- <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <a href="{{route('google.login')}}" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-vwblue hover:bg-vwblue focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                       Google connect
                    </a>
                </span>
            </div> --}}
        </form>
    </div>
    <div class="mt-6">
        <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
            <a href="{{route('auth.requestPassword')}}" class="font-medium text-vwblue hover:text-vwblue focus:outline-none focus:underline transition ease-in-out duration-150">
                {{__('Lost password ?')}}
            </a>
        </p>
        
    </div>
</div>
