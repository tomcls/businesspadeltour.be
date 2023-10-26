<?php

namespace App\Http\Livewire\Auth;

use App\Models\Company;
use App\Models\PlayerSession;
use App\Models\Session;
use App\Models\Team;
use App\Models\User;
use App\Models\UserSession;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Http\Request;

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
            'company.name' => 'required',
            'company.vat' => 'required',
            'company.email' => 'required|email',
            'company.address' => 'required',
        ];
    }
    public function mount()
    {
        $this->sessions = Session::where('startdate', '>=', '2024-01-01')->get();
    }
    public function register()
    {

        $data = $this->validate([
            'playerOneFirstname' => 'required',
            'playerOneLastname' => 'required',
            'playerOneEmail' => 'required|email',
            'playerOnePhone' => 'required',
            'playerOneSize' => 'required',
            'playerTwoFirstname' => 'required',
            'playerTwoLastname' => 'required',
            'playerTwoEmail' => 'required|email',
            'playerTwoPhone' => 'required',
            'playerTwoSize' => 'required',
            'companyName' => 'required',
            'companyVAT' => 'required',
            'session' => 'required',
            'category' => 'required',
            'address' => 'required'
        ]);
        try {
            $playerOne = new User();
            $playerOne->firstname = $data['playerOneFirstname'];
            $playerOne->lastname = $data['playerOneLastname'];
            $playerOne->email = $data['playerOneEmail'];
            $playerOne->phone = $data['playerOnePhone'];
            $playerOne->lang = App::currentLocale();
            $playerOne->size = $data['playerOneSize'];
            $playerOne->password = Hash::make('PadelUser4ever$');
            $playerOne->save();
        } catch (Exception $e) {
            // Log::alert('Exception playerOne '.$e->getMessage());
        }
        try {
            $playerTwo = new User();
            $playerTwo->firstname = $data['playerTwoFirstname'];
            $playerTwo->lastname = $data['playerTwoLastname'];
            $playerTwo->email = $data['playerTwoEmail'];
            $playerTwo->phone = $data['playerTwoPhone'];
            $playerTwo->lang = App::currentLocale();
            $playerTwo->size = $data['playerTwoSize'];
            $playerTwo->password = Hash::make('PadelUser4ever$');
            $playerTwo->save();
        } catch (Exception $e) {
        }
        try {
            $company = new Company();
            $company->name = $data['companyName'];
            $company->vat = $data['companyVAT'];
            $company->address = $data['address'];
            $company->save();
        } catch (Exception $e) {
            // Log::alert('Exception compny '.$e->getMessage());
        }
        $c = Company::where('vat', $data['companyVAT'])->first();
        /* try {
            $userSessionPlayerOne = new UserSession();
            $u = User::where('email',$data['playerOneEmail'])->first();
            $userSessionPlayerOne->user_id = $u['id'] ;
            $userSessionPlayerOne->company_id = $c['id'] ;
            $userSessionPlayerOne->session_id = $this->session;
            $userSessionPlayerOne->category = $this->category;
            $userSessionPlayerOne->save();
        } catch (Exception $e) {
          //  Log::alert('Exception usersession '.$e->getMessage());
        }
        try {

            $userSessionPlayerTwo = new UserSession();
            $u = User::where('email',$data['playerTwoEmail'])->first();
            $userSessionPlayerTwo->user_id = $u['id'];//User::find($data['playerTwoEmail'])->id;
            $userSessionPlayerTwo->company_id = $c['id'];//User::find($data['playerTwoEmail'])->id;
            $userSessionPlayerTwo->session_id = $this->session;
            $userSessionPlayerTwo->category = $this->category;
            $userSessionPlayerTwo->save();

        } catch (Exception $e) { 
           // Log::alert('Exception playerTwo '.$e->getMessage());
        } */
        try {

            $playerSession = new PlayerSession();
            $playerOne = User::where('email', $data['playerOneEmail'])->first();
            $playerTwo = User::where('email', $data['playerTwoEmail'])->first();
            $playerSession->player_one = $playerOne['id']; //User::find($data['playerTwoEmail'])->id;
            $playerSession->player_two = $playerTwo['id'];
            $playerSession->company_id = $c['id']; //User::find($data['playerTwoEmail'])->id;
            $playerSession->session_id = $this->session;
            $playerSession->category = $this->category;
            $playerSession->save();
        } catch (Exception $e) {
            logger('Exception playerTwo ' . $e->getMessage());
        }

        try {
            $s = Session::find($this->session);

            require_once('/var/www/html/vendor/autoload.php');
            $mailchimp = new \MailchimpTransactional\ApiClient();
            $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
            // player one
            $template_content = array(
                array(
                    'name' => 'firstname',
                    'content' => $data["playerOneFirstname"] . ' ' . $data["playerOneLastname"]
                ),
                array(
                    'name' => 'lastname',
                    'content' => $data["playerOneEmail"]
                ),
                array(
                    'name' => 'session',
                    'content' => $s['name'] . ", " . $s['club_name'] . " (lieu: " . $s['address'] . ", le " . $s['startdate'] . ')'
                )
            );
            $to = [];
            array_push($to, [
                "email" =>  $data['playerOneEmail'],
                "type" => "to"
            ]);
            $message = [
                "from_email" => "info@businesspadeltour.be",
                'from_name'  => 'Business padel tour',
                "subject" => __('signup.signupCompleted'),
                "to" => $to,
                "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                'global_merge_vars' => $template_content
            ];
            // Log::alert('Player 1 email sent '.App::currentLocale());
            $response = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_signup_" . App::currentLocale(),
                "template_content" => $template_content,
                "message" => $message,
            ]);
            // player two
            $template_content = array(
                array(
                    'name' => 'firstname',
                    'content' => $data["playerTwoFirstname"] . ' ' . $data["playerTwoLastname"]
                ),
                array(
                    'name' => 'lastname',
                    'content' => $data["playerTwoEmail"]
                ),
                array(
                    'name' => 'session',
                    'content' => $s['name'] . ", " . $s['club_name'] . " (lieu: " . $s['address'] . ", le " . $s['startdate'] . ')'
                )
            );
            $to = [];
            array_push($to, [
                "email" =>  $data['playerTwoEmail'],
                "type" => "to"
            ]);
            $message = [
                "from_email" => "info@businesspadeltour.be",
                'from_name'  => 'Business padel tour',
                "subject" => __('signup.signupCompleted'),
                "to" => $to,
                "headers" => ["Reply-To" => "katia@businesspadeltour.be"],
                'global_merge_vars' => $template_content
            ];
            // Log::alert('Player 2 email sent '.App::currentLocale());
            $response = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_signup_" . App::currentLocale(),
                "template_content" => $template_content,
                "message" => $message,
            ]);
            // admin
            $template_content = array(
                array(
                    'name' => 'playerTwoFirstname',
                    'content' => $data["playerTwoFirstname"]
                ),
                array(
                    'name' => 'playerTwoLastname',
                    'content' => $data["playerTwoLastname"]
                ),
                array(
                    'name' => 'playerTwoEmail',
                    'content' => $data["playerTwoEmail"]
                ),
                array(
                    'name' => 'playerOnePhone',
                    'content' => $data["playerOnePhone"] . ', T-shirt: ' . $data["playerOneSize"] . ', lang: ' . App::currentLocale()
                ),

                array(
                    'name' => 'playerOneFirstname',
                    'content' => $data["playerOneFirstname"]
                ),
                array(
                    'name' => 'playerOneLastname',
                    'content' => $data["playerOneLastname"]
                ),
                array(
                    'name' => 'playerOneEmail',
                    'content' => $data["playerOneEmail"]
                ),
                array(
                    'name' => 'playerTwoPhone',
                    'content' => $data["playerTwoPhone"] . ', T-shirt: ' . $data["playerTwoSize"] . ', lang: ' . App::currentLocale()
                ),

                array(
                    'name' => 'companyName',
                    'content' => $data["companyName"]
                ),
                array(
                    'name' => 'companyVAT',
                    'content' => $data["companyVAT"] . ' (' . $data["address"] . ')'
                ),
                array(
                    'name' => 'session',
                    'content' => $s['name'] . ", " . $s['club_name'] . " (lieu: " . $s['address'] . ", le " . $s['startdate'] . ')'
                )
            );
            $to = [];
            array_push($to, [
                "email" =>  "info@businesspadeltour.be",
                "type" => "to"
            ]);
            $message = [
                "from_email" => "info@businesspadeltour.be",
                'from_name'  => 'Business padel tour',
                "subject" => "Registration Completed",
                "to" => $to,
                "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                'global_merge_vars' => $template_content
            ];
            //Log::alert('Admin email sent '.App::currentLocale());
            $response2 = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_signup_admin",
                "template_content" => $template_content,
                "message" => $message,
            ]);
            // Log::alert(json_encode($response).json_encode($response2));
        } catch (Exception $e) {
            //Log::alert($e->getMessage().$e->getTraceAsString());
        }
        //auth()->login($user);
        $this->saved = true;
        // return redirect('/index');
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
            $company->name = $this->company['name'];
            $company->vat = $this->company['vat'];
            $company->email = $this->company['email'];
            $company->address = $this->company['address'];
            try {
                $company->save();
            } catch (\Throwable $th) {
                $company = Company::whereEmail($this->company['email'])->first();
            }
            if($company) {

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

                    $team->save();
                    $this->saved = true;
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
