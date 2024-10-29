<?php

namespace App\Http\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public ModelsContact $contact;

    public $saved = false;

    public function rules() {
        return [
            'contact.firstname' => 'required',
            'contact.lastname' => 'required',
            'contact.email' => 'required|email',
            'contact.phone' => 'required',
            'contact.company_name' => 'sometimes',
            'contact.company_vat' => 'sometimes',
            'contact.company_address' => 'sometimes',
            'contact.company_zip' => 'sometimes',
        ];
    }
    public function mount() {
        $this->contact = $this->createBlankContact();
    }
    public function createBlankContact() {
        return  ModelsContact::make([]);
    }
    public function save()
    {
        $this->validate();
        try {
            $this->contact->save();
            $this->saved = true;


            $mailchimp = new \MailchimpTransactional\ApiClient();
            $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
            // player one
            $template_content = array(
                array(
                    'name' => 'firstname',
                    'content' => $this->contact->firstname
                ),
                array(
                    'name' => 'lastname',
                    'content' => $this->contact->lastname
                ),
                array(
                    'name' => 'email',
                    'content' => $this->contact->email
                ),
                array(
                    'name' => 'phone',
                    'content' => $this->contact->phone
                ),
                array(
                    'name' => 'companyName',
                    'content' => $this->contact->company_name
                ),
                array(
                    'name' => 'companyVAT',
                    'content' => $this->contact->company_vat
                ),
                array(
                    'name' => 'companyAddress',
                    'content' => $this->contact->company_address
                ),
                array(
                    'name' => 'companyZip',
                    'content' => $this->contact->company_zip
                ),
                array(
                    'name' => 'url',
                    'content' => 'https://businesspadeltour.be/contacts/download?p=afzefeazcvfvzfgzczeqfczyiklyuilguikeee'
                ));
            $to = [];
            array_push($to,[
                "email" =>  'info@businesspadeltour.be',
                "type" => "to"
            ]);
            $message = [
                "from_email" => "info@businesspadeltour.be",
                'from_name'  => 'Vertuoza padel tour',
                "subject" => __('signup.signupCompleted'),
                "to" => $to,
                "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                'global_merge_vars' => $template_content
            ];
           // Log::alert('Player 1 email sent '.App::currentLocale());
            $response = $mailchimp->messages->sendTemplate([
                "template_name" => "bpt_stay_tune",
                "template_content" => $template_content,
                "message" => $message,
            ]);


        } catch (\Exception $e) {
            $c = ModelsContact::whereEmail($this->contact->email)->first();
            if($c) {
                $c->firstname = $this->contact->firstname;
                $c->lastname = $this->contact->lastname;
                $c->phone = $this->contact->phone;
                $c->company_name = $this->contact->company_name;
                $c->company_zip = $this->contact->company_zip;
                $c->company_address = $this->contact->company_address;
                $c->update();
                $this->saved = true;
            }
        }
    }
    public function render()
    {
        return view('livewire.contact')->layout('components.layouts.base');
    }
}
