<div class="max-w-2xl mx-auto ">
    <h1 class="text-lg font-black pb-6 pl-5 text-center pt-10 color-dark-blue">{{__('Upload the logo of your business')}}</h1>
    <div class="text-center">
        <x-input.file-upload  id="photo" onChange='upload' label='Upload' model='upload' >
    </div>
 </x-input.group>
 <!-- Contacts Table -->
 <div class="flex-col space-y-4 pt-6 ">
     <x-table>
         <x-slot name="head">
            
         </x-slot>
 
         <x-slot name="body">
             @forelse ($rows as $row)
             <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}">
                 <x-table.cell class="cursor-pointer font-bold" >
                     @if (str_contains(strtolower($row->name),'.png') || str_contains(strtolower($row->name),'.jpg') || str_contains(strtolower($row->name),'.jpeg') || str_contains(strtolower($row->name),'.webp'))
                         <img src="{{$row->url()}}" alt="" class="h-16 w-16 rounded-md">
                     @else
                         <x-icon.image class="h-16 w-16 text-gray-300"/>
                     @endif
                 </x-table.cell>
                 <x-table.cell>
                    <a target="_blank" class="text-blue-600 font-bold" href="{{$row->url()}}">{{ $row->name ?? '-' }}</a> </small>
                 </x-table.cell>
             </x-table.row>
             @empty
             <x-table.row>
                 <x-table.cell colspan="12">
                     <div class="flex justify-center items-center space-x-2">
                         <x-icon.image class="h-8 w-8 text-cool-gray-400" />
                         <span class="font-medium py-8 text-cool-gray-400 text-xl">{{__('No logo found')}}...</span>
                     </div>
                 </x-table.cell>
             </x-table.row>
             @endforelse
         </x-slot>
     </x-table>
     <div class="text-center">
        @if ($invoice->id &&$invoice->price)
        <a href="{{url('/').'/'.App::currentLocale().'/charge?iid='.$invoice->id}}" class="text-blue-800 font-bold text-sm">{{__("I don't have the logo yet, I skip this step")}}</a>
        <a href="{{url('/').'/'.App::currentLocale().'/charge?iid='.$invoice->id}}" class="inline-block rounded-md bg-blue-800 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">{{__("Continue")}}</a>
       @else
        <a href="{{url('/').'/'.App::currentLocale().'/charge-success?iid='.$invoice->id}}" class="text-blue-800 font-bold text-sm">{{__("I don't have the logo yet, I skip this step")}}</a>
        <a href="{{url('/').'/'.App::currentLocale().'/charge-success?iid='.$invoice->id}}" class="inline-block rounded-md bg-blue-800 px-3.5 py-2 text-center text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">{{__("Continue")}}</a>
        @endif
     </div>
 </div>
 </div>
