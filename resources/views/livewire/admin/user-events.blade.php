<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex-col space-y-4 pt-6">
        <x-table>
            <x-slot name="head">
                <x-table.heading  >
                    REF
                </x-table.heading>
                <x-table.heading >{{__('Company name')}}</x-table.heading>
                <x-table.heading >{{__('User')}}</x-table.heading>
                <x-table.heading >{{__('Event name')}}</x-table.heading>
                <x-table.heading >{{__('Total teams')}}</x-table.heading>
                <x-table.heading >{{__('Invoice')}}</x-table.heading>
                <x-table.heading >{{__('Date')}}</x-table.heading>
            </x-slot>
    
            <x-slot name="body">
                
    
                @forelse ($rows as $row)
                <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}">
                   
                    <x-table.cell >
                        {{ $row->id }}
                    </x-table.cell>
                    <x-table.cell >
                        @if (!empty($row->user->company->id))
                            <div class="text-xs">{{$row->user->company->id.'# '. $row->user->company->name ?? null }}</div> 
                            <span class="text-xs">{{ $row->user->company->email ?? null }}</span> 
                        @else
                            -
                        @endif
                    </x-table.cell>
                    <x-table.cell >
                       <div class="text-xs">{{ $row->user->id.'# '. $row->user->email }}</div> 
                       <span class="text-xs">{{ $row->user->firstname.' '.$row->user->lastname }}</span> 
                    </x-table.cell>
                    <x-table.cell class="cursor-pointer font-bold" >
                        {{$row->event->id}}# {{$row->event->name}}
                    </x-table.cell>
                    <x-table.cell class="cursor-pointer font-bold" >
                        @if ($row->event->id < 3)
                            0
                        @else
                        {{$row->teams}}
                        @endif
                    </x-table.cell>
                    <x-table.cell >
                        @if (!empty($row->invoice->id))
                            <div class="text-xs">{{ $row->invoice->id .'# '.$row->invoice->price.'€ '}} {{ $row->invoice->description }}</div> 
                            <span class="text-xs">{{ $row->invoice->intent }}</span> 
                        @else
                            @if ($row->event->id < 3)
                            <a class="text-blue-600 cursor-pointer" target="_blank" href="{{url('/').'/'.App::currentLocale().'/charge?ueid='.$row->id}}"><x-icon.link /></a> 
                            @endif
                        @endif
                        
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
