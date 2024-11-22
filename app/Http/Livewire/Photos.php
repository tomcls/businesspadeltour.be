<?php

namespace App\Http\Livewire;

use App\Models\Session;
use App\Models\SessionPhotos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;

class Photos extends Component
{
    public $showEditModal = false;
    public $tab = 'toursandtaxi'; // liege
    public $sessions = [];
    public $sessionId;
    public $session;
    public $images = [];
    public $selectedYear;
   
    public function mount(Request $request, $slug = null)
    {

        $this->tab = $slug?? 'toursandtaxi';
        $this->sessions =  Session::orderBy('startdate','desc')->get();
        $this->sessionId = $request['session_id'] ?? null;

        if(!$this->sessionId) {
            $endYear = now()->format('Y');
            foreach ($this->sessions as $session) {
                if (Carbon::parse($session->startdate)->format('Y') == $endYear) {
                    $this->sessionId = $session->id;
                    break;
                }
            }
        }
        $this->session = Session::whereId($this->sessionId)->first();
        $this->selectedYear = Carbon::parse($this->session->startdate)->format('Y');
        $this->images = SessionPhotos::whereSessionId($this->sessionId)->get();

    }

    public function render()
    {
        return view('livewire.photos')->layout('layouts.base');
    }
}
