<?php

namespace App\Http\Livewire\Auth;

use App\Models\Company;
use App\Models\Invoice;
use App\Models\Session;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
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
    protected $listeners = ['onTeamValidated', 'onTotalTeamChanged','onSetParentSessionId'=>'setSession'];
    public $company;
    public $promo;
    public $invoice;
    public $sessionId;
    public $room;
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
            'company.zip' => 'required|max:4',
            'company.city' => 'required',
        ];
    }
    public function mount(Request $request)
    {
        $this->sessions = Session::where('startdate', '>=', '2025-01-01')->orderBy('startdate', 'asc')->get();
        $this->company['vat'] = 'BE 0';
        $this->sessionId = $request['session_id'] ?? null;
    }

    public function setSession($id)
    {
        $this->sessionId = $id;
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
            // $this->saved = true;
            $company = new Company();
            $company->firstname = $this->company['firstname'];
            $company->lastname = $this->company['lastname'];
            $company->name = $this->company['name'];
            $company->vat = $this->company['vat'];
            $company->email = $this->company['email'];
            $company->address = $this->company['address'] . ", " . $this->company['city'];
            $company->phone = $this->company['phone'];
            $company->zip = $this->company['zip'];
            try {
                $company->save();
            } catch (\Throwable $th) {
                logger($th->getMessage());
                $company = Company::whereEmail($this->company['email'])->first();
                $company->firstname = $this->company['firstname'];
                $company->lastname = $this->company['lastname'];
                $company->name = $this->company['name'];
                $company->vat = $this->company['vat'];
                $company->email = $this->company['email'];
                $company->address = $this->company['address'] . ", " . $this->company['city'];
                $company->phone = $this->company['phone'];
                $company->zip = $this->company['zip'];
                $company->update();
            }
            $user = new User();
            $user->firstname = $this->company['firstname'];
            $user->lastname = $this->company['lastname'];
            $user->email = $this->company['email'];
            $user->phone = $this->company['phone'];
            $user->lang = App::currentLocale();
            $user->password =  Hash::make('PadelUser4ever$');
            $user->company_id = $company->id;

            try {
                $user->save();
            } catch (\Throwable $th) {
                $user = User::whereEmail($this->company['email'])->first();
                $user->firstname = $this->company['firstname'];
                $user->lastname = $this->company['lastname'];
                $user->email = $this->company['email'];
                $user->phone = $this->company['phone'];
                $user->lang = App::currentLocale();
                $user->company_id = $company->id;
                $user->save();
            }

            if ($company) {
                $playersEmail = [];
                $content = "";
                $price = 0;
                if($this->sessionId != 36) {

                    if ($this->totalTeam >= 10) {
                        $price = 195 * $this->totalTeam;
                    } else if ($this->totalTeam >= 5) {
                        $price = 215 * $this->totalTeam;
                    } else {
                        $price = 250 * $this->totalTeam;
                    }
                    if ($this->promo == "rosselpadel") {
                        $price = 150 * $this->totalTeam;
                    }
    
                    if ($this->promo == "vertuozatour24") {
                        $price = 195 * $this->totalTeam;
                    }
    
    
                    if ($this->promo == "antwerp1705") {
                        $price = 0 * $this->totalTeam;
                    }
    
                    if (strtolower($this->promo) == strtolower("EARLYBIRD")) {
                        $price = $price - ($price / 100 * 10);
                    }
                } else {
                    $price = 550 * $this->totalTeam;
                    if($this->room) {
                        $price += ($this->room * 110);
                    }
                }

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
                    $playersEmail[$value['playerOneEmail']] = ["firstname" => $value['playerOneFirstname'], "lastname" => $value['playerOneLastname']];
                    $playersEmail[$value['playerTwoEmail']] = ["firstname" => $value['playerTwoFirstname'], "lastname" => $value['playerTwoLastname']];


                    $content .= "<br><b>Equipe " . $key . "</b><br/>";
                    $content .= "<b>- " . __('signup.Player') . " 1:</b> " . $value['playerOneFirstname'] . "  " . $value['playerOneLastname'] . " t-Shirt: " . $value['playerOneSize'] . "<br/>";
                    $content .= "<b>- " . __('signup.Player') . " 2:</b> " . $value['playerTwoFirstname'] . "  " . $value['playerTwoLastname'] . " t-Shirt: " . $value['playerTwoSize'] . "<br/>";
                    $content .= "<b>" . __('signup.Session') . ":</b><br/>";
                    $session = Session::whereId($value['session'])->first();

                    $content .= "<b>- " . __('signup.Place') . ":</b> " . $session->club . "  " . $session->city . "<br/>";
                    $content .= "<b>- " . __('signup.Date') . ":</b> " . Carbon::parse($session->startdate)->format('d-m-Y') . "<br/>";
                    $content .= "<b>" . __('signup.Category') . ":</b> " . $value['category'] . "<br/>";

                    if (strtolower($this->promo) == "rosselpadel") {
                        $content .= "<br/><b>" . __('signup.Price') . " Promo code " . $this->promo . "</b>: " . $price . " € +TVA";
                    }

                    if (strtolower($this->promo) == "vertuozatour24") {
                        $content .= "<br/><b>" . __('signup.Price') . " Promo code " . $this->promo . "</b>: " . $price . " € + TVA";
                    }
                    if (strtolower($this->promo) == strtolower("antwerp1705")) {
                        $content .= "<br/><b>" . __('signup.Price') . " Promo code " . $this->promo . "</b>: " . $price . " € + TVA";
                    }
                    if (strtolower($this->promo) == strtolower("EARLYBIRD")) {
                        $content .= "<br/><b>" . __('signup.Price') . " Promo code " . $this->promo . "</b>: " . $price . " € + TVA";
                    }
                    if($this->sessionId == 36 ) {
                        $content .= "<br/><b> Inscription Séjour Ténérife</b>: " . $price . " € + TVA";
                        if($this->room) {
                            $content .= '<br/>'.$this->room." chambre(s) dbl, (".($this->room * 110) . "€)";
                        }
                    }
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
                    "subject" => __('signup.VertuozaPadelTour: New team sign-up'),
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
                    )
                );
                $to = [];
                array_push($to, [
                    "email" =>  $company->email,
                    "type" => "to"
                ]);
                $message = [
                    "from_email" => "info@businesspadeltour.be",
                    'from_name'  => 'Vertuoza padel tour',
                    "subject" => __('signup.VertuozaPadelTour: New team sign-up'),
                    "to" => $to,
                    "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                    'global_merge_vars' => $template_content
                ];
                // Log::alert('Player 1 email sent '.App::currentLocale());
                $response = $mailchimp->messages->sendTemplate([
                    "template_name" => "bpt_signup_mgr_" . App::currentLocale(),
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
                        )
                    );
                    $to = [];
                    array_push($to, [
                        "email" =>  $key,
                        "type" => "to"
                    ]);
                    $message = [
                        "from_email" => "info@businesspadeltour.be",
                        'from_name'  => 'Vertuoza padel tour',
                        "subject" => __('signup.VertuozaPadelTour: New team sign-up'),
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
                }
                $this->invoice = new Invoice();
                $this->invoice->user_id = $user->id;
                $this->invoice->invoice_num = Invoice::newInvoiceNumber();
                $this->invoice->price = $price;
                $this->invoice->description = "Padel Session subscription: (" . (count($this->totalTeamsValidated) > 1 ? (count($this->totalTeamsValidated) . 'teams') : '1 team') . ')';
                $this->invoice->intent = microtime();
                $this->invoice->save();
                redirect('/' . App::currentLocale() . '/upload?iid=' . $this->invoice->id);
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
