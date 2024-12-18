<div>
    {{-- The Master doesn't talk, he acts. --}}
     <!-- Advanced Search -->
     <div class="bg-white rounded-md">
        
        <div class="bg-cool-gray-200 p-4 rounded shadow-inner flex relative">
            <div class="w-1/2 pr-2 space-y-4">
                <div class="flex flex-col sm:flex-row sm:space-x-2">
                    <div class="basis-1/2 sm:basis-1/4">
                        <x-input.group  for="filter-id" label="Id">
                            <x-input.text wire:model.lazy="filters.id" id="filter-id" />
                        </x-input.group>
                    </div>
                    <div class="basis-1/2 sm:basis-1/2">
                        <x-input.group  for="filter-email" label="Email">
                            <x-input.text wire:model.lazy="filters.email" id="filter-email" />
                        </x-input.group>
                    </div>
                    <div class="basis-1/2">
                        <x-input.group  for="filter-firstname" label="Firstname">
                            <x-input.text wire:model.lazy="filters.firstname" id="filter-firstname" />
                        </x-input.group>
                    </div>
                    <div class="basis-1/2">
                        <x-input.group  for="filter-lastname" label="Lastname">
                            <x-input.text wire:model.lazy="filters.lastname" id="filter-lastname" />
                        </x-input.group>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row sm:space-x-2">
                    <div class="basis-1/4">
                        <x-input.group  for="filter-event" label="Events">
                            <x-input.select wire:model="filters.event_id" id="filter-event" class="py-2">
                                <option value="" >Select event...</option>
                                @foreach ($events as $value => $e)
                                <option value="{{ $e->id }}">{{'#'.$e->id.' '.$e->name }}</option>
                                @endforeach
                            </x-input.select>
                        </x-input.group>
                    </div>
                    <div class="basis-1/4">
                        <x-input.group  for="filter-session_id" label="Sessions">
                            <x-input.select wire:model="filters.session_id" id="filter-session_id" class="py-2">
                                <option value="" >Select session...</option>
                                @foreach ($sessions as $value => $s)
                                <option value="{{ $s->id }}">{{'#'.$s->id.' '.$s->club_name.' '.\Carbon\Carbon::parse($s->startdate)->format('d-m-Y') }}</option>
                                @endforeach
                            </x-input.select>
                        </x-input.group>
                    </div>
                   
                    <div class="basis-1/4">
                        <x-input.group  for="filter-price" label="Price">
                            <x-input.select wire:model="filters.price" id="filter-price" class="py-2">
                                <option value="" >Select price...</option>
                                @foreach ($prices as $value => $s)
                                <option value="{{ $s->price }}">{{$s->price }}</option>
                                @endforeach
                            </x-input.select>
                        </x-input.group>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-col space-y-4 pt-6">
        <x-table>
            <x-slot name="head">
                <x-table.heading  >
                    REF
                </x-table.heading>
                <x-table.heading >{{__('Company')}}</x-table.heading>
                <x-table.heading >{{__('User')}}</x-table.heading>
                <x-table.heading >{{__('Name')}}</x-table.heading>
                <x-table.heading >{{__('Invoice')}}</x-table.heading>
                <x-table.heading >{{__('Date')}}</x-table.heading>
                <x-table.heading ></x-table.heading>
            </x-slot>
    
            <x-slot name="body">
                
    
                @forelse ($rows as $row)
                <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}" class="{{(empty($row->intent)) ? 'bg-pink-100' : ''}} cursor-pointer" >
                   
                    <x-table.cell wire:click='show({{$row}})'>
                        {{ $row->id }}
                    </x-table.cell>
                    <x-table.cell wire:click='show({{$row}})'>
                        @if (!empty($row->user->company->id))
                            <div class="text-xs">{{$row->user->company->id.'# '. $row->user->company->name ?? null }}</div> 
                            <span class="text-xs">{{ $row->user->company->email ?? null }}</span> 
                        @else
                            -
                        @endif
                    </x-table.cell>
                    <x-table.cell wire:click='show({{$row}})'>
                       <div class="text-xs">{{ $row->user->id.'# '. $row->user->email }}</div> 
                       <span class="text-xs">{{ $row->user->firstname.' '.$row->user->lastname }}</span> 
                    </x-table.cell>
                    <x-table.cell class="cursor-pointer font-bold" wire:click='show({{$row}})'>
                        @if ($row->eventUser)
                        {{$row->eventUser->event->id}}# {{$row->eventUser->event->name}}
                        @endif
                        @if ($row->team)
                        {{$row->team->session->id}}# {{$row->team->session->club_name}}<br/>{{\Carbon\Carbon::parse($row->team->session->startdate)->format('d-m-Y')}}
                        @endif
                        @if (!$row->team && !$row->eventUser)
                        -
                        @endif
                    </x-table.cell>
                    <x-table.cell class="flex flex-row space-x-3">
                        @if (!empty($row->id))
                            <div class="text-xs">{{ $row->id .'# '.$row->price.'€ '}} {!! $row->description !!}</div> 
                            <span class="text-xs">{{ $row->intent }}</span> 
                            @if (!$row->intent)
                            <a class="text-blue-600 cursor-pointer" target="_blank" href="{{url('/').'/'.App::currentLocale().'/charge?iid='.$row->id}}"><x-icon.link /></a> 
                            @endif
                        @else
                            @if ($row->eventUser->event->id > 2)
                            <a class="text-blue-600 cursor-pointer" target="_blank" href="{{url('/').'/'.App::currentLocale().'/charge?ueid='.$row->id}}"><x-icon.link /></a> 
                            @endif
                        @endif
                        
                    </x-table.cell> 
                    <x-table.cell wire:click='show({{$row}})' >
                        {{ $row->created_at }} 
                    </x-table.cell>
                    <x-table.cell  >
                        <button class="text-pink-600 cursor-pointer" wire:click="showModal({{$row->id}})"><x-icon.trash/></button>
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
     <!-- Delete Users Modal -->
     <form wire:submit.prevent="delete">
        <x-modal.confirmation wire:model.defer="showDeleteModal" maxWidth="max-w-xl" >
            <x-slot name="title">Delete Subscription</x-slot>

            <x-slot name="content">
                <div class="py-8 text-cool-gray-700">Are you sure you? This action is irreversible.</div>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showDeleteModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Delete</x-button.primary>
            </x-slot>
        </x-modal.confirmation>
    </form>
    <!-- Save User Modal -->
    
        
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showModal" class="bg-white">
            <x-slot name="title">
               <span class="font-bold">Subscription details</span> 
            </x-slot>
            
            <x-slot name="content" >
                @if (!empty($detail))
                <div class=" overflow-y-auto h-[70vh]  xl:h-auto">
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-row space-x-2 pt-3">
                            @if ($detail->eventUser)
                            <div class="font-bold">{{$detail->eventUser->event->name}}</div>
                            <div class="font-medium text-sm pt-0.5">({{$detail->eventUser->event->address}}, {{\Carbon\Carbon::parse($detail->eventUser->event->date)->format('d-m-Y')}})</div>
                            @endif
                            @if ($detail->team)
                            <div class="font-bold">{{$detail->team->session->club_name}}</div>
                            <div class="font-medium text-sm pt-0.5">({{$detail->team->session->city}}, {{\Carbon\Carbon::parse($detail->team->session->startdate)->format('d-m-Y')}})</div>
                            @endif
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-bold text-sm text-slate-600">User: </div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-semibold text-sm">{{ucfirst($detail->user->firstname)}} {{ucfirst($detail->user->lastname)}}</div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-semibold text-sm">{{$detail->user->email}}, {{$detail->user->phone}}</div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-bold text-sm text-slate-600">Company: </div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-semibold text-sm">{{ucfirst($detail->user->company->name)}} ({{$detail->user->company->vat}})</div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-bold text-sm text-slate-600">Subscription details: {{$detail->id}}# </div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-semibold text-sm">Created at {{$detail->created_at}}</div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-semibold text-sm">{!!$detail->description!!}</div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-bold text-sm text-slate-600">Stripe id:</div>
                            <div class="font-semibold text-sm"> {{$detail->intent ?? ' - '}}</div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-bold text-sm text-slate-600">Date payed:</div>
                            <div class="font-semibold text-sm"> {{$detail->date_payed ?? ' - '}}</div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="font-bold text-sm text-slate-600">Total:</div>
                            <div class="font-semibold text-sm"> {{$detail->price ? $detail->price.'€' : ' - '}}</div>
                        </div>
                        @if ($teams)
                            
                        <div class="flex flex-row space-x-2">
                            <div class="font-bold text-sm text-slate-600">Team(s):</div>
                        </div>
                        <x-table>
                            <x-slot name="head">
                                <x-table.heading >{{__('Player one')}}</x-table.heading>
                                <x-table.heading >{{__('Player two')}}</x-table.heading>
                                <x-table.heading >{{__('Session')}}</x-table.heading>
                                <x-table.heading >{{__('Level')}}</x-table.heading>
                            </x-slot>
                    
                            <x-slot name="body">
                                
                    
                                @forelse ($teams as $row)
                                <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}">
                                   
                                    <x-table.cell class=" font-bold text-xs" >
                                        {{ucfirst($row->playerone->firstname).' '.ucfirst($row->playerone->lastname)}}<br>{{$row->playerone->email}} <br/>
                                        Tshirt: {{ $row->playerone->size }} 
                                    </x-table.cell>
                                    <x-table.cell class=" font-bold text-xs" >
                                        {{ucfirst($row->playertwo->firstname).' '.ucfirst($row->playertwo->lastname)}}<br>{{$row->playertwo->email}} <br/>
                                        Tshirt: {{ $row->playertwo->size }} 
                                    </x-table.cell>
                                    <x-table.cell class=" font-bold text-xs">
                                        {{ ucfirst($row->session->club_name) }}<br>
                                        {{\Carbon\Carbon::parse($detail->team->session->startdate)->format('d-m-Y')}}
                                    </x-table.cell>
                                    <x-table.cell class=" font-bold text-xs">
                                        {{ $row->category }}
                                    </x-table.cell>
                                </x-table.row>
                                @empty
                                <x-table.row>
                                    <x-table.cell colspan="12">
                                        <div class="flex justify-center items-center space-x-2">
                                            <x-icon.user class="h-8 w-8 text-cool-gray-400" />
                                            <span class="font-medium py-8 text-cool-gray-400 text-xl">{{__('No transactions found')}}...</span>
                                        </div>
                                    </x-table.cell>
                                </x-table.row>
                                @endforelse
                            </x-slot>
                        </x-table>
                        @endif
                    </div>
                </div>
                @endif
            </x-slot>
            <x-slot name="footer" class="bg-white">
                <x-button.secondary wire:click="$set('showModal', false)">Close</x-button.secondary>
            </x-slot>
        </x-modal.dialog>
    </form>
    
</div>
