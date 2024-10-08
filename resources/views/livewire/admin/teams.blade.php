<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex-col space-y-4 pt-6">
        <x-table>
            <x-slot name="head">
                <x-table.heading  >
                    REF
                </x-table.heading>
                <x-table.heading >{{__('Company')}}</x-table.heading>
                <x-table.heading >{{__('Player one')}}</x-table.heading>
                <x-table.heading >{{__('Player two')}}</x-table.heading>
                <x-table.heading >{{__('Session')}}</x-table.heading>
                <x-table.heading >{{__('Category')}}</x-table.heading>
            </x-slot>
    
            <x-slot name="body">
                
    
                @forelse ($rows as $row)
                <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}">
                   
                    <x-table.cell >
                        {{ $row->id }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->company->name }}
                    </x-table.cell>
                    <x-table.cell class="cursor-pointer font-bold" >
                        {{$row->playerone->firstname.' '.$row->playerone->lastname}}
                    </x-table.cell>
                    <x-table.cell class="cursor-pointer font-bold" >
                        {{$row->playertwo->firstname.' '.$row->playertwo->lastname}}
                    </x-table.cell>
    
                    <x-table.cell >
                        {{ $row->session->name }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->category }}
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
