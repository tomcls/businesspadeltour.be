<?php

namespace App\Http\Livewire;

use App\Models\EventUser;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class ChargeSuccess extends Component
{
    public $user;
    public $eventUser;
    public $price;
    public $invoice;
    public function mount(Request $request) {
        if (!empty($request['ueid'])) {
            $this->eventUser = EventUser::whereId($request['ueid'])->first();
            $this->price = $this->eventUser->event->price * $this->eventUser->teams ;
            $this->invoice = Invoice::whereIntent($request['payment_intent'])->first();
            if(!$this->invoice) {
                $this->invoice = new Invoice();
                $this->invoice->user_id = $this->eventUser->user_id;
                $this->invoice->invoice_num = Invoice::newInvoiceNumber();
                $this->invoice->price = $this->price;
                $this->invoice->description = "Event ".$this->eventUser->event->name. ' ('.$this->eventUser->teams.' '.($this->eventUser->teams>1?'teams':'teams').')';
                $this->invoice->intent = $request['payment_intent'];
                $this->invoice->date_payed = now();
                $this->invoice->save();
                $user = $this->invoice->user;
                $mailchimp = new \MailchimpTransactional\ApiClient();
                $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
                // player one
                $template_content = array(
                    array(
                        'name' => 'url',
                        'content' => route('invoice',['id'=>$this->invoice->id,'t'=>$this->invoice->intent])
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
            }
        }
        if (!empty($request['iid'])) {
            $this->invoice = Invoice::whereId($request['iid'])->first();
            //$this->invoice->price = $this->invoice->price;
            $this->invoice->intent = $request['payment_intent'];
            $this->invoice->date_payed = now();
            $this->invoice->save();
        }

    }
    public function render()
    {
        return view('livewire.charge-success')->layout('layouts.base');
    }
}
