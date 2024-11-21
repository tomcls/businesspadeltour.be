<?php

namespace App\Http\Livewire;

use App\Models\EventUser;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Livewire\Component;

class Charge extends Component
{
    public $user;
    public $eventUser;
    public $price = 0;
    public $invoice;
    public $description;
    public $customPrice;
    public $returnUrl;

    public function mount(Request $request) {
        if (!empty($request['ueid']) && !empty($request['customPrice'])) {
            $this->eventUser = EventUser::whereId($request['ueid'])->first();
            $this->price = $request['customPrice'];    
            $this->customPrice = $this->price;

        } else if (!empty($request['ueid']) && empty($request['customPrice'])) {
            $this->eventUser = EventUser::whereId($request['ueid'])->first();
            if (!empty($request['withHotel'])) {
                $this->price += 440;
            }
            $this->price += $this->eventUser->event->price * $this->eventUser->teams * 1.21;
            $this->description = "Event ".$this->eventUser->event->name. ' ('.$this->eventUser->teams.' '.($this->eventUser->teams>1?'teams':'team').')';
        }
       
        if (!empty($request['iid'])) {
            $this->invoice = Invoice::whereId($request['iid'])->first();
            $this->price = $this->invoice->price * 1.21;
        }
        $this->returnUrl = route('charge.success',[
            'ueid'=> $this->eventUser->id ?? null,
            'iid'=> $this->invoice->id ?? null,
            'custom_price'=> $this->customPrice ?? null,
            'total_alone'=> $request['totalAlone'] ?? null,
            'total_team'=> $request['totalTeam'] ?? null,
            'total_player'=> $request['totalPlayer'] ?? null,
            'level_player'=> $request['levelPlayer'] ?? null,
            'level_team'=> $request['levelPlayer'] ?? null
        ]);
    }
    public function render()
    {
        return view('livewire.charge')->layout('layouts.base');
    }
}
