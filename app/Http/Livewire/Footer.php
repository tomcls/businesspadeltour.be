<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use App\Repositories\MailRepository;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class Footer extends Component
{
    public $tos = false;
   

    public function mount() {
       
    }
    
   
    public function render()
    {
        return view('livewire.footer');
    }
}
