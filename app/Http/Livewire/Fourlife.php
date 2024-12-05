<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Fourlife extends Component
{

    public $eventId = 6;
    public $customPrice = 0;
    public $user;
    public $company;
    public $totalTeam;
    public $totalAlone;

    public $levelPlayer='fun';
    public $levelTeam='fun';

    public $priceAlone;
    public $priceTeam;
    public $pricePlayer;

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
            'company.name' => 'sometimes',
            'company.vat' => 'sometimes',
            'company.address' => 'required',
            'company.zip' => 'required|max:4',
            'company.city' => 'required',
        ];
    }
    public function validateCompany()
    {
        logger('validateCompany');
        $this->user['lang'] = App::currentLocale();
            $this->validate();
        if(!$this->priceTeam && !$this->pricePlayer && !$this->priceTeam) {
            $this->notify(['message' => "Veuillez sélectionner au moins un type d'inscription svp", 'type' => 'alert']);
        } else {

            
            logger('validateCompany!!!!!');
            $company = new Company();
            $company->firstname = $this->user['firstname'];
            $company->lastname = $this->user['lastname'];
            $company->name = $this->company['name'] ?? ' - ';
            $company->vat = $this->company['vat'] ?? ' - ';
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
                $company->name = $this->company['name'] ?? ' - ';
                $company->vat = $this->company['vat'] ?? ' - ';
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
            $user->company_id = $company->id;
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
            // player one
            $wh = '';
            $subscriptionType = null;
            if ($this->priceAlone) {
                $subscriptionType = '<br/>'.  ($this->totalAlone ?? 1). " accompagant(s)";
                $this->totalAlone = $this->totalAlone ?? 1;
                $this->customPrice = $this->totalAlone * 10;
                $wh .= '&totalAlone='.$this->totalAlone;
            } 
            if ($this->pricePlayer) {
                $subscriptionType .=' <br/> '.  "- 1 joueur, level:".$this->levelPlayer;
                $this->customPrice += 25;
                $wh .= '&pricePlayer=25&levelPlayer='.$this->levelPlayer;
            } 
            if ($this->priceTeam) {
                $this->totalTeam = $this->totalTeam ?? 1;
                $this->customPrice += ($this->totalTeam??1) * 50;
                $subscriptionType .=' <br/> - '. $this->totalTeam." team(s), level:".$this->levelTeam;
                $wh .= '&totalTeam='.$this->totalTeam.'&levelTeam='.$this->levelTeam;
            }
            $invoice = new Invoice();
            $invoice->user_id = $user->id;
            $invoice->invoice_num = Invoice::newInvoiceNumber();
            $invoice->price = $this->customPrice;
            $invoice->description = "Event PadelFourLife". ' '.$subscriptionType;
            $invoice->intent = null;
            $invoice->date_payed = null;

            $invoice->vat = false;
            $invoice->save();

            $eventUser = new EventUser();
            $eventUser->user_id = $user->id;
            $eventUser->event_id = $this->eventId;
    
            $eventUser->teams = 1;
            $eventUser->invoice_id = $invoice->id;
            $eventUser->save();
    
            $mailchimp = new \MailchimpTransactional\ApiClient();
            $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
            
            $event = Event::whereId($this->eventId)->first();
            

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
                    'name' => 'company_name',
                    'content' => $company->name
                ),
                array(
                    'name' => 'company_vat',
                    'content' => $company->vat
                ),
                array(
                    'name' => 'company_address',
                    'content' => $company->address . ' ' . $company->zip
                ),
                array(
                    'name' => 'email',
                    'content' => $company->email
                ),
                array(
                    'name' => 'phone',
                    'content' => $company->phone
                ),
                array(
                    'name' => 'subscription_type',
                    'content' => $subscriptionType
                ),
                array(
                    'name' => 'type',
                    'content' => $subscriptionType
                ),
                array(
                    'name' => 'event_name',
                    'content' => $event->name
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
                "subject" => 'Business Padel Tour: Viva for Life ',
                "to" => $to,
                "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                'global_merge_vars' => $template_content
            ];
            $response = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_signup_event_admin",
                "template_content" => $template_content,
                "message" => $message,
            ]);
            
            $event = Event::whereId($eventUser->event_id)->first();
                
                $template_content = array(
                    
                    array(
                        'name' => 'event_name',
                        'content' => $event->name
                    ));
                $to = [];
                array_push($to,[
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
                    "template_name" => "vertuoza_padel_event_thx_".(App::currentLocale()=='fr' || App::currentLocale()=='nl' ? App::currentLocale():'fr'),
                    "template_content" => $template_content,
                    "message" => $message,
                ]);


            $wh .= '&customPrice=' . $this->customPrice;
            redirect('/' . App::currentLocale() . '/charge?iid=' . $invoice->id);
        }
    }
    public function render()
    {
        return view('livewire.fourlife')->layout('layouts.base');
    }
}
