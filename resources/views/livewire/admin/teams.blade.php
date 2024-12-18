<div>
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
                        <x-input.group  for="filter-session_id" label="Sessions">
                            <x-input.select wire:model="filters.session_id" id="filter-session_id" class="py-2">
                                <option value="" >Select session...</option>
                                @foreach ($sessions as $value => $s)
                                <option value="{{ $s->id }}">{{'#'.$s->id.' '.$s->club_name.' '.\Carbon\Carbon::parse($s->startdate)->format('d-m-Y') }}</option>
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
                <x-table.heading >{{__('Player one')}}</x-table.heading>
                <x-table.heading >{{__('Player two')}}</x-table.heading>
                <x-table.heading >{{__('Session')}}</x-table.heading>
                <x-table.heading >{{__('Category')}}</x-table.heading>
                <x-table.heading ></x-table.heading>
            </x-slot>
    
            <x-slot name="body">
                
    
                @forelse ($rows as $row)
                <x-table.row wire:loading.class.delay="opacity-70" wire:key="row-{{ $row->id }}">
                   
                    <x-table.cell >
                        {{ $row->id }}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->company->name }}<br>
                        <span class="text-xs">{{$row->company->email}}</span>
                    </x-table.cell>
                    <x-table.cell class="cursor-pointer font-bold" >
                        {{$row->playerone->firstname.' '.$row->playerone->lastname}} ({{$row->playerone->size}})<br>
                        <span class="text-xs">{{$row->playerone->email}}</span>
                    </x-table.cell>
                    <x-table.cell class="cursor-pointer font-bold" >
                        {{$row->playertwo->firstname.' '.$row->playertwo->lastname}} ({{$row->playertwo->size}})<br>
                        <span class="text-xs">{{$row->playertwo->email}}</span>
                    </x-table.cell>
    
                    <x-table.cell >
                        {{ $row->session->club_name }} <br>
                        {{\Carbon\Carbon::parse($row->session->startdate)->format('d-m-Y')}}
                    </x-table.cell>
                    <x-table.cell >
                        {{ $row->category }}
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
           <x-slot name="title">Delete Team</x-slot>

           <x-slot name="content">
               <div class="py-8 text-cool-gray-700">Are you sure you? This action is irreversible.</div>
           </x-slot>

           <x-slot name="footer">
               <x-button.secondary wire:click="$set('showDeleteModal', false)">Cancel</x-button.secondary>

               <x-button.primary type="submit">Delete</x-button.primary>
           </x-slot>
       </x-modal.confirmation>
   </form>
</div>
