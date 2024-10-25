<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Event;
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
    public $eventId = 1;
    public $price;
    public $eventPrice = 50;
    public $events = [
        1 => 'arenal',
        2 => 'tero',
        3 => 'arenal',
        4 => 'tero',
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
            'company.name' => 'required',
            'company.vat' => 'required',
            'company.address' => 'required',
            'company.zip' => 'required|max:4',
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
        $this->user['lang'] = App::currentLocale();
        $this->validate();

        $company = new Company();
        $company->firstname = $this->user['firstname'];
        $company->lastname = $this->user['lastname'];
        $company->name = $this->company['name'];
        $company->vat = $this->company['vat'];
        $company->email = $this->user['email'];
        $company->zip = $this->company['zip'];
        $company->address = $this->company['address'] . ', ' . $this->company['city'];
        $company->phone = $this->user['phone'];

        try {
            $company->save();
        } catch (\Throwable $th) {
            
            $company = Company::whereEmail($this->user['email'])->first();
            $company->firstname = $this->user['firstname'];
            $company->lastname = $this->user['lastname'];
            $company->name = $this->company['name'];
            $company->vat = $this->company['vat'];
            $company->email = $this->user['email'];
            $company->address = $this->company['address'] . ', ' . $this->company['city'];
            $company->zip = $this->company['zip'];
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
        if($this->eventId<3) {
            $this->totalTeam = 0;
        }
        $eventUser->teams = $this->totalTeam;
        $eventUser->save();

        $mailchimp = new \MailchimpTransactional\ApiClient();
        $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));

        $event = Event::whereId($this->eventId)->first();
        // player one
        $template_content = array(
            array(
                'name' => 'companyFirstname',
                'content' => $company->firstname
            ),
            array(
                'name' => 'companyLastname',
                'content' => $company->lastname
            ),
            array(
                'name' => 'companyName',
                'content' => $company->name
            ),
            array(
                'name' => 'companyVAT',
                'content' => $company->vat
            ),
            array(
                'name' => 'companyEmail',
                'content' => $company->email
            ),
            array(
                'name' => 'companyPhone',
                'content' => $company->phone
            ),
            array(
                'name' => 'CompanyAddress',
                'content' => $company->address
            ),
            array(
                'name' => 'totalTeams',
                'content' => $this->totalTeam
            ),
            array(
                'name' => 'content',
                'content' => 'Subscription event Vertuoza Padel Tour <br>'.$event->name
            )
        );
        $to = [];
        array_push($to, [
            "email" =>  'info@businesspadeltour.be',
            "type" => "to"
        ]);
        $message = [
            "from_email" => "info@businesspadeltour.be",
            'from_name'  => 'Vertuoza padel tour',
            "subject" => 'Business Padel Tour: Event subscription '.$event->name.' Total teams:'.$this->totalTeam,
            "to" => $to,
            "headers" => ["Reply-To" => "info@businesspadeltour.be"],
            'global_merge_vars' => $template_content
        ];
        $response = $mailchimp->messages->sendTemplate([
            "template_name" => "bpt_signup_admin",
            "template_content" => $template_content,
            "message" => $message,
        ]);


        if ($this->eventId > 2) {
            redirect('/' . App::currentLocale() . '/charge?ueid=' . $eventUser->id);
        } else {
            
            // player one
            $template_content = array(
                array(
                    'name' => 'event_name',
                    'content' => $event->name
                ),
            );
            $to = [];
            array_push($to, [
                "email" =>  $user->email,
                "type" => "to"
            ]);
            $message = [
                "from_email" => "info@businesspadeltour.be",
                'from_name'  => 'Vertuoza padel tour',
                "subject" => __('Subscription event Vertuoza Padel Tour'),
                "to" => $to,
                "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                'global_merge_vars' => $template_content
            ];
            $response = $mailchimp->messages->sendTemplate([
                "template_name" => "vertuoza_padel_event_thx_" . (App::currentLocale() == 'fr' || App::currentLocale() == 'nl' ? App::currentLocale() : 'fr'),
                "template_content" => $template_content,
                "message" => $message,
            ]);

            redirect('/' . App::currentLocale() . '/welcome-event-success');
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
