<div>
   <h1 class="text-lg font-black pb-6 pl-5">Business logos</h1>
   <x-input.file-upload  id="photo" onChange='upload' label='Upload a logo' model='upload'>
</x-input.group>
<!-- Contacts Table -->
<div class="flex-col space-y-4 pt-6">
    <x-table>
        <x-slot name="head">
            <x-table.heading  >
                REF
            </x-table.heading>
            <x-table.heading >{{__('Logo')}}</x-table.heading>
            <x-table.heading >{{__('Name')}}</x-table.heading>
            <x-table.heading >{{__('Date')}}</x-table.heading>
        </x-slot>

        <x-slot name="body">
            

            @forelse ($rows as $row)
            <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}">
               
                <x-table.cell >
                    {{ $row->id }}
                </x-table.cell>
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

                <x-table.cell >
                    {{ $row->created_at }}
                </x-table.cell>
            </x-table.row>
            @empty
            <x-table.row>
                <x-table.cell colspan="12">
                    <div class="flex justify-center items-center space-x-2">
                        <x-icon.user class="h-8 w-8 text-cool-gray-400" />
                        <span class="font-medium py-8 text-cool-gray-400 text-xl">{{__('No logo found')}}...</span>
                    </div>
                </x-table.cell>
            </x-table.row>
            @endforelse
        </x-slot>
    </x-table>
    <div>
        {{ $rows->links() }}
    </div>
</div>
</div>
