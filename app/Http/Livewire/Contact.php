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
            'contact.company_name' => 'required',
            'contact.company_vat' => 'required',
            'contact.company_address' => 'required',
            'contact.company_zip' => 'required',
        ];
    }
    public function mount() {
        logger('hello');
        $this->contact = $this->createBlankContact();
    }
    public function createBlankContact() {
        return  ModelsContact::make([]);
    }
    public function save()
    {

        logger('save');
        $this->validate();
        logger('save.validate');
        try {
            $this->contact->save();
            $this->saved = true;
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
