<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\EventUser;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class WelcomeEvent extends Component
{
    public $user;
    public $totalTeam = 1;
    public $sessions = [];
    public $totalTeamsValidated = [];
    protected $listeners = ['onTeamValidated', 'onTotalTeamChanged'];
    public $company;
    public $promo;
    public $saved = false;
    public $openTeamSection = false;
    public $eventId;
    public $price;
    public $eventPrice = 50;
    public $events = [
        1 =>'arenal',
        2 =>'tero',
        3 =>'arenal',
        4 =>'tero',
    ];

    protected function rules()
    {
        return [
            'user.firstname' => 'required',
            'user.lastname' => 'required',
            //  'user.name' => 'required',
            'user.lang' => 'required',
            'user.email' => 'required|email',
            'user.phone' => 'required',
            // 'user.address' => 'required',
            // 'user.zip' => 'required',
            //'user.city' => 'required',
            'company.firstname' => 'required',
            'company.lastname' => 'required',
            'company.name' => 'required',
            'company.vat' => 'required',
            'company.email' => 'required|email',
            'company.phone' => 'required',
            'company.address' => 'required',
            'company.zip' => 'required',
            'company.city' => 'required',
        ];
    }
    public function mount(Request $request)
    {

        if ($request['id']) {
            $this->user = User::whereId($request['id'])->first();
            if ($this->user && $this->user->company_id) {
                $this->company = $this->user->company->toArray();
            }
        }
        $this->sessions = Session::where('startdate', '>=', '2024-10-01')->get();
        if (!$this->company) {
            $this->company['vat'] = 'BE 0';
        }
        $this->price = $this->eventPrice * $this->totalTeam;
    }
    public function validateCompany()
    {
        $company = new Company();
        $company->firstname = $this->user['firstname'];
        $company->lastname = $this->user['lastname'];
        $company->name = $this->company['name'];
        $company->vat = $this->company['vat'];
        $company->email = $this->user['email'];
        $company->address = $this->user['address'] . ", " . $this->user['zip'] . " " . $this->user['city'];
        $company->phone = $this->user['phone'];

        $user = new User();

        try {
            $company->save();
        } catch (\Throwable $th) {
            $company = Company::whereEmail($this->user['email'])->first();
            $company->firstname = $this->user['firstname'];
            $company->lastname = $this->user['lastname'];
            $company->name = $this->company['name'];
            $company->vat = $this->company['vat'];
            $company->email = $this->user['email'];
            $company->address = $this->company['address'];
            $company->phone = $this->user['phone'];
            $company->update();
        }
        $user = new User();
        $user->firstname = $this->user['firstname'];
        $user->lastname = $this->user['lastname'];
        $user->email = $this->user['email'];
        $user->phone = $this->user['phone'];
        $user->lang = App::currentLocale();
        $user->password =  Hash::make('PadelUser4ever$');

        try {
            $user->save();
        } catch (\Throwable $th) {
            $user = User::whereEmail($this->user['email'])->first();
            $user->firstname = $this->user['firstname'];
            $user->lastname = $this->user['lastname'];
            $user->email = $this->user['email'];
            $user->phone = $this->user['phone'];
            $user->lang = App::currentLocale();
            $user->company_id = $company->id;
            $user->save();
        }
        $eventUser = new EventUser();
        $eventUser->user_id = $user->id;
        $eventUser->event_id = $this->eventId;
        $eventUser->teams = $this->totalTeam;
        $eventUser->save();

        if($this->eventId > 2) {
            redirect('/'.App::currentLocale().'/charge?ueid='.$eventUser->id);
        }
    }
    public function onTotalTeamChanged($total)
    {
        $this->totalTeam = $total;
        $this->totalTeamsValidated = [];
    }
    public function validateTeam()
    {
        $this->validate();
        $this->emit('onValidateTeam');
    }
    public function updatedEmail()
    {
        $this->validate(['email' => 'unique:users']);
    }
    public function render()
    {
        return view('livewire.welcome-event')->layout('layouts.base');
    }
}
