<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex-col space-y-4 pt-6">
        <x-table>
            <x-slot name="head">
                <x-table.heading  >
                    REF
                </x-table.heading>
                <x-table.heading >{{__('Name')}}</x-table.heading>
                <x-table.heading >{{__('Address')}}</x-table.heading>
                <x-table.heading >{{__('Start date')}}</x-table.heading>
                <x-table.heading >{{__('Club')}}</x-table.heading>
                <x-table.heading >{{__('City')}}</x-table.heading>
            </x-slot>
    
            <x-slot name="body">
                
    
                @forelse ($rows as $row)
                <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}">
                   
                    <x-table.cell >
                        {{ $row->id }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->name }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->address }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->startdate }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->club_name }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->city }}
                    </x-table.cell>
                    <x-table.cell >
                        <a href="{{route('admin.photos',['session_id'=>$row->id])}}" class="cursor-pointer"> <x-icon.image class="text-pink-600 h-6 w-6"/></a>
                       
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
