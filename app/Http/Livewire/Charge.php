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
    public $price;
    public $invoice;
    public $description;

    public function mount(Request $request) {
        if (!empty($request['ueid'])) {
            $this->eventUser = EventUser::whereId($request['ueid'])->first();
            $this->price = $this->eventUser->event->price * $this->eventUser->teams * 1.21;
            $this->description = "Event ".$this->eventUser->event->name. ' ('.$this->eventUser->teams.' '.($this->eventUser->teams>1?'teams':'team').')';
        }
        if (!empty($request['iid'])) {
            $this->invoice = Invoice::whereId($request['iid'])->first();
            $this->price = $this->invoice->price * 1.21;
            $description = $this->invoice->description;
        }
    }
    public function render()
    {
        return view('livewire.charge')->layout('layouts.base');
    }
}
