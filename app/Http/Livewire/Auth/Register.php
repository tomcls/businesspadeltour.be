<?php

namespace App\Http\Livewire\Auth;

use App\Models\Company;
use App\Models\Session;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $saved = false;
    public $totalTeam = 1;
    public $sessions = [];
    public $totalTeamsValidated = [];
    protected $listeners = ['onTeamValidated', 'onTotalTeamChanged'];
    public $company;
    protected function rules()
    {
        return [
            'company.firstname' => 'required',
            'company.lastname' => 'required',
            'company.name' => 'required',
            'company.vat' => 'required',
            'company.email' => 'required|email',
            'company.phone' => 'required',
            'company.address' => 'required',
        ];
    }
    public function mount()
    {
        $this->sessions = Session::where('startdate', '>=', '2024-01-01')->get();
        $this->company['vat'] = 'BE 0';
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
    public function onTeamValidated($team)
    {
       
        $this->totalTeamsValidated[$team['number']] = $team;
        if (count($this->totalTeamsValidated) == $this->totalTeam) {
            logger('onTeamValidated' . $this->totalTeam);
            // $this->saved = true;
            $company = new Company();
            $company->firstname = $this->company['firstname'];
            $company->lastname = $this->company['lastname'];
            $company->name = $this->company['name'];
            $company->vat = $this->company['vat'];
            $company->email = $this->company['email'];
            $company->address = $this->company['address'];
            $company->phone = $this->company['phone'];
            try {
                $company->save();
            } catch (\Throwable $th) {
                $company = Company::whereEmail($this->company['email'])->first();
                $company->firstname = $this->company['firstname'];
                $company->lastname = $this->company['lastname'];
                $company->name = $this->company['name'];
                $company->vat = $this->company['vat'];
                $company->email = $this->company['email'];
                $company->address = $this->company['address'];
                $company->phone = $this->company['phone'];
                $company->update();
            }   
            if($company) {
                $playersEmail = [];
                $content = "";
                foreach ($this->totalTeamsValidated as $key => $value) {
                    $userOne = new User();
                    $userOne->firstname = $value['playerOneFirstname'];
                    $userOne->lastname = $value['playerOneLastname'];
                    $userOne->email = $value['playerOneEmail'];
                    $userOne->size = $value['playerOneSize'];
                    $userOne->lang = App::currentLocale();
                    $userOne->password =  Hash::make('PadelUser4ever$');
                    try {
                        $userOne->save();
                    } catch (\Throwable $th) {
                        $userOne = User::whereEmail($value['playerOneEmail'])->first();
                    }
                    $userTwo = new User();
                    $userTwo->firstname = $value['playerTwoFirstname'];
                    $userTwo->lastname = $value['playerTwoLastname'];
                    $userTwo->email = $value['playerTwoEmail'];
                    $userTwo->size = $value['playerTwoSize'];
                    $userTwo->lang = App::currentLocale();
                    $userTwo->password =  Hash::make('PadelUser4ever$');
                    try {
                        $userTwo->save();
                    } catch (\Throwable $th) {
                        $userTwo = User::whereEmail($value['playerTwoEmail'])->first();
                    }

                    $team = new Team();
                    $team->player_one = $userOne->id;
                    $team->player_two = $userTwo->id;
                    $team->session_id = $value['session'];
                    $team->category = $value['category'];
                    $team->company_id = $company->id;
                    try {
                        $team->save();
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                    
                    $this->saved = true;
                    $playersEmail[$value['playerOneEmail']] = ["firstname"=>$value['playerOneFirstname'],"lastname"=>$value['playerOneLastname']];
                    $playersEmail[$value['playerTwoEmail']] = ["firstname"=>$value['playerTwoFirstname'],"lastname"=>$value['playerTwoLastname']];


                    $content .="<br><b>Equipe ".$key."</b><br/>";
                    $content .="<b>- Joueur 1:</b> ".$value['playerOneFirstname']."  ".$value['playerOneFirstname']."<br/>";
                    $content .="<b>- Joueur 2:</b> ".$value['playerTwoLastname']."  ".$value['playerOneLastname']."<br/>";
                    $content .="<b>Session:</b><br/>";
                    $session = Session::whereId($value['session'])->first();
                    logger('adzefzfez');
                    logger($value['session']);
                    logger($session);
                    $content .="<b>- Lieu:</b> ".$session->club."  ".$session->address."<br/>";
                    $content .="<b>- Date:</b> ".$session->startdate."<br/>";
                    $content .="<b>Category:</b> ".$value['category']."<br/>";
                }
                $mailchimp = new \MailchimpTransactional\ApiClient();
                $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
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
                        'content' => $content
                    ));
                $to = [];
                array_push($to,[
                    "email" =>  'info@businesspadeltour.be',
                    "type" => "to"
                ]);
                $message = [
                    "from_email" => "info@businesspadeltour.be",
                    'from_name'  => 'Business padel tour',
                    "subject" => "BusinessPadelTour: Nouvelle inscription équipe",
                    "to" => $to,
                    "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                    'global_merge_vars' => $template_content
                ];
               // Log::alert('Player 1 email sent '.App::currentLocale());
                $response = $mailchimp->messages->sendTemplate([
                    "template_name" => "bpt_signup_admin",
                    "template_content" => $template_content,
                    "message" => $message,
                ]);

                $price = 0;
                if($this->totalTeam>=10) {
                    $price = 195 * $this->totalTeam;
                } else if($this->totalTeam>=5) {
                    $price = 215 * $this->totalTeam;
                } else {
                    $price = 250 * $this->totalTeam;
                }

                $template_content = array(
                    array(
                        'name' => 'firstname',
                        'content' => $company->firstname
                    ),
                    array(
                        'name' => 'lastname',
                        'content' => $company->lastname
                    ),
                    array(
                        'name' => 'totalTeams',
                        'content' => $this->totalTeam
                    ),
                    array(
                        'name' => 'content',
                        'content' => $content
                    ),
                    array(
                        'name' => 'price',
                        'content' => $price
                    ),
                    array(
                        'name' => 'priceVAT',
                        'content' => $price * 1.21
                    ));
                $to = [];
                array_push($to,[
                    "email" =>  $company->email,
                    "type" => "to"
                ]);
                $message = [
                    "from_email" => "info@businesspadeltour.be",
                    'from_name'  => 'Business padel tour',
                    "subject" => "BusinessPadelTour: Nouvelle inscription équipe",
                    "to" => $to,
                    "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                    'global_merge_vars' => $template_content
                ];
               // Log::alert('Player 1 email sent '.App::currentLocale());
                $response = $mailchimp->messages->sendTemplate([
                    "template_name" => "bpt_signup_mgr_".App::currentLocale(),
                    "template_content" => $template_content,
                    "message" => $message,
                ]);
                foreach ($playersEmail as $key => $value) {
                    $template_content = array(
                        array(
                            'name' => 'firstname',
                            'content' => $value['firstname']
                        ),
                        array(
                            'name' => 'lastname',
                            'content' => $value['lastname']
                        ),
                        array(
                            'name' => 'firstnameMgr',
                            'content' => $company->firstname
                        ),
                        array(
                            'name' => 'lastnameMgr',
                            'content' => $company->lastname
                        ),
                        array(
                            'name' => 'totalTeams',
                            'content' => $this->totalTeam
                        ),
                        array(
                            'name' => 'content',
                            'content' => $content
                        ));
                    $to = [];
                    array_push($to,[
                        "email" =>  $key,
                        "type" => "to"
                    ]);
                    $message = [
                        "from_email" => "info@businesspadeltour.be",
                        'from_name'  => 'Business padel tour',
                        "subject" => "BusinessPadelTour: Nouvelle inscription équipe",
                        "to" => $to,
                        "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                        'global_merge_vars' => $template_content
                    ];
                   // Log::alert('Player 1 email sent '.App::currentLocale());
                    $response = $mailchimp->messages->sendTemplate([
                        "template_name" => "bpt_signup_".App::currentLocale(),
                        "template_content" => $template_content,
                        "message" => $message,
                    ]);
                }
                
            } else {
                logger('no company');
            }
        }
    }

    public function updatedEmail()
    {
        $this->validate(['email' => 'unique:users']);
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layout.home');
    }
}
