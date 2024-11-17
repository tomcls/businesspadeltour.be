<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tenerife extends Component
{
    public $eventId = 5;
    public $price = 550;
    public $withHotel = 0;
    public function render()
    {
        return view('livewire.tenerife')->layout('layouts.base');
    }
}
