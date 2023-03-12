<?php

namespace App\Http\Livewire\Auth;

use App\Models\Company;
use App\Models\Session;
use App\Models\User;
use App\Models\UserSession;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Register extends Component
{
    public $playerOneFirstname = '';
    public $playerOneLastname = '';
    public $playerOneEmail = '';
    public $playerTwoFirstname = '';
    public $playerTwoLastname = '';
    public $playerTwoEmail = '';
    public $companyName = '';
    public $companyVAT = '';
    public $session = '';
    public $saved = false;

    public function register()
    {

        $data = $this->validate([
            'playerOneFirstname' => 'required',
            'playerOneLastname' => 'required',
            'playerOneEmail' => 'required|email',
            'playerTwoFirstname' => 'required',
            'playerTwoLastname' => 'required',
            'playerTwoEmail' => 'required|email',
            'companyName' => 'required',
            'companyVAT' => 'required',
            'session' => 'required'
        ]);
        try {
            $playerOne = new User();
            $playerOne->firstname = $data['playerOneFirstname'];
            $playerOne->lastname = $data['playerOneLastname'];
            $playerOne->email = $data['playerOneEmail'];
            $playerOne->password=Hash::make('PadelUser4ever$');
            $playerOne->save();
        } catch (Exception $e) {}
        try {
            $playerTwo = new User();
            $playerTwo->firstname = $data['playerTwoFirstname'];
            $playerTwo->lastname = $data['playerTwoLastname'];
            $playerTwo->email = $data['playerTwoEmail'];
            $playerTwo->password=Hash::make('PadelUser4ever$');
            $playerTwo->save();
        } catch (Exception $e) {}
        try {
            $company = new Company();
            $company->name = $data['companyName'];
            $company->vat = $data['companyVAT'];
            $company->save();
        } catch (Exception $e) {}
        $c = Company::where('vat',$data['companyVAT'])->first();
        try {
            $userSessionPlayerOne = new UserSession();
            $u = User::where('email',$data['playerOneEmail'])->first();
            $userSessionPlayerOne->user_id = $u['id'] ;
            $userSessionPlayerOne->user_id = $c['id'] ;
            $userSessionPlayerOne->session_id = $this->session;
            $userSessionPlayerOne->save();
        } catch (Exception $e) {}
        try {

            $userSessionPlayerTwo = new UserSession();
            $u = User::where('email',$data['playerTwoEmail'])->first();
            $userSessionPlayerTwo->user_id = $u['id'];//User::find($data['playerTwoEmail'])->id;
            $userSessionPlayerTwo->company_id = $c['id'];//User::find($data['playerTwoEmail'])->id;
            $userSessionPlayerTwo->session_id = $this->session;
            $userSessionPlayerTwo->save();

        } catch (Exception $e) { }

        try {
            $s = Session::find($this->session);

            require_once('/var/www/html/vendor/autoload.php');
            $mailchimp = new \MailchimpTransactional\ApiClient();
            $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
            // player one
            $template_content = array(
                array(
                    'name' => 'firstname',
                    'content' => $data["playerOneFirstname"].' '.$data["playerOneLastname"]
                ),
                array(
                    'name' => 'lastname',
                    'content' => $data["playerOneEmail"]
                ),
                array(
                    'name' => 'session',
                    'content' => $s['name'].", ".$s['club_name']." (lieu: ".$s['address'].", le ".$s['startdate'].')'
                ));
            $to = [];
            array_push($to,[
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
            $response = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_signup_".App::currentLocale(),
                "template_content" => $template_content,
                "message" => $message,
            ]);
             // player two
             $template_content = array(
                array(
                    'name' => 'firstname',
                    'content' => $data["playerTwoFirstname"].' '.$data["playerTwoLastname"]
                ),
                array(
                    'name' => 'lastname',
                    'content' => $data["playerTwoEmail"]
                ),
                array(
                    'name' => 'session',
                    'content' => $s['name'].", ".$s['club_name']." (lieu: ".$s['address'].", le ".$s['startdate'].')'
                ));
            $to = [];
            array_push($to,[
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
            Log::alert('register '.App::currentLocale());
            $response = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_signup_".App::currentLocale(),
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
                    'name' => 'companyName',
                    'content' => $data["companyName"]
                ),
                array(
                    'name' => 'companyVAT',
                    'content' => $data["companyVAT"]
                ),
                array(
                    'name' => 'session',
                    'content' => $s['name'].", ".$s['club_name']." (lieu: ".$s['address'].", le ".$s['startdate'].')'
                ));
            $to = [];
            array_push($to,[
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
            $response2 = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_signup_admin",
                "template_content" => $template_content,
                "message" => $message,
            ]);
          //  Log::alert("aaaaaaaaaaaaaaaaaaaaaaaaaaaa");
           // Log::alert(json_encode($response).json_encode($response2));
        } catch (Exception $e) {
            //Log::alert("bbbbbbbbbbbbbbbbbbbbbbbbb");
            //Log::alert($e->getMessage().$e->getTraceAsString());
        }



        //auth()->login($user);
        $this->saved = true;
        // return redirect('/index');
    }
    public function setSession($name = "session")
    {
        $this->session = $name;
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
