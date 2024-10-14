<?php

namespace App\Http\Livewire;

use App\Models\EventUser;
use Illuminate\Http\Request;
use Livewire\Component;

class Charge extends Component
{
    public $user;
    public $eventUser;
    public $price;
    
    public function mount(Request $request) {
        if (!empty($request['ueid'])) {
            $this->eventUser = EventUser::whereId($request['ueid'])->first();
            $this->price = $this->eventUser->event->price * $this->eventUser->teams * 1.21;
        }
    }
    public function render()
    {
        return view('livewire.charge')->layout('layouts.base');
    }
}
