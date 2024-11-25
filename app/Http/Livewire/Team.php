<?php

namespace App\Http\Livewire;

use App\Models\Team as ModelsTeam;
use Carbon\Carbon;
use Livewire\Component;

class Team extends Component
{
    public $sessions;

    public $team;
    public $sessionId;
    public $session;
    public $selectSessionString;
    protected function rules(){
        return [
            'team.session' => 'required',
            'team.category' => 'required',
            'team.number' => 'required',
            'team.playerOneFirstname' => 'required',
            'team.playerOneLastname' => 'required',
            'team.playerOneEmail' => 'required|email',
            'team.playerOneSize' => 'required',
            'team.playerTwoFirstname' => 'required',
            'team.playerTwoLastname' => 'required',
            'team.playerTwoEmail' => 'required|email',
            'team.playerTwoSize' => 'required',
        ];
    }

    protected $listeners = ['onValidateTeam','onSetSession'=>'setSession'];

    public function mount($teamNumber, $sessions, $sessionId=null) {
        $this->selectSessionString = __('signup.select');
        $this->team['number'] = $teamNumber;
        $this->sessions = $sessions;
        if($sessionId) {
            $this->sessionId = $sessionId;
            $this->team['session'] = $sessionId;
           foreach ($sessions as $key => $s) {
            if($s->id == $sessionId) {
                $this->session = $s;
                $this->selectSessionString = $this->session->city.': '.Carbon::parse($this->session->startdate)->format('d-m-Y');
                break;
            }
           }
            
        }
        
       
    }

    public function setSession($id)
    {
        $this->team['session'] = $id;
        $this->emit('onSetParentSessionId',$id);
    }

    public function setCategory($name = "fun")
    {
        $this->team['category'] = $name;
    }

    public function onValidateTeam() {
       $this->validate();
       $this->emit('onTeamValidated', $this->team);
    }

    public function render()
    {
        return view('livewire.team');
    }
}
