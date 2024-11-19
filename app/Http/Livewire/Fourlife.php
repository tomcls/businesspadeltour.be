<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Fourlife extends Component
{

    public $eventId = 6;
    public $customPrice = 10;
    public $user;
    public $company;

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
        $eventUser = new EventUser();
        $eventUser->user_id = $user->id;
        $eventUser->event_id = $this->eventId;

        $eventUser->teams = 1;
        $eventUser->save();

        $mailchimp = new \MailchimpTransactional\ApiClient();
        $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
        $subscriptionType = null;
        $event = Event::whereId($this->eventId)->first();
        // player one
        if ($this->customPrice == 10) {
            $subscriptionType = "Je suis un accompagant (10€)";
        } else if ($this->customPrice == 25) {
            $subscriptionType = "Je joue au padel seul (25€)";
        } else if ($this->customPrice == 50) {
            $subscriptionType = "Je joue au padel équipe (50€)";
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
        if ($this->customPrice) {
            $wh = '&customPrice=' . $this->customPrice;
        }
        redirect('/' . App::currentLocale() . '/charge?ueid=' . $eventUser->id . $wh);
    }
    public function render()
    {
        return view('livewire.fourlife')->layout('layouts.base');
    }
}
