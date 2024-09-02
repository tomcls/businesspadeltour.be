<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CampaignJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailchimp = new \MailchimpTransactional\ApiClient();
        $mailchimp->setApiKey(env('MAILCHIMP_APIKEY'));
        $cpt =0;
        $users = User::get();
        //$users = User::where('email', '=', 'tomclassius@gmail.com')->get();

       // logger($users);
        foreach ($users as $key => $user) {
            // player one
            $template_content = array(
                array(
                    'name' => 'firstname',
                    'content' => $user->firstname
                ),
                array(
                    'name' => 'lastname',
                    'content' => $user->lastname
                ),
                array(
                    'name' => 'email',
                    'content' => $user->email
                ),
                array(
                    'name' => 'phone',
                    'content' => $user->phone
                ),
                array(
                    'name' => 'companyName',
                    'content' => $user->company_name
                ),
                array(
                    'name' => 'companyVAT',
                    'content' => $user->company_vat
                ),
                array(
                    'name' => 'companyAddress',
                    'content' => $user->company_address
                ),
                array(
                    'name' => 'companyZip',
                    'content' => $user->company_zip
                )
            );
            $to = [];
            $email = trim(strtolower( $user->email));
            array_push($to, [
                "email" =>  $email,
                "type" => "to"
            ]);
           
            $message = [
                "from_email" => "info@businesspadeltour.be",
                'from_name'  => 'Vertuoza padel tour',
                "subject" => 'Le Vertuoza Padel Tour 2024 à rendu son verdict.',
                "to" => $to,
                "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                'global_merge_vars' => $template_content
            ];
            $cpt ++;
            try {
                logger('mail sent to '.$email. " total = ".$cpt);
                // Log::alert('Player 1 email sent '.App::currentLocale());
                $response = $mailchimp->messages->sendTemplate([
                    "template_name" => "template_eric",
                    "template_content" => $template_content,
                    "message" => $message,
                ]);
                logger($response);
            } catch (\Throwable $th) {
                //throw $th;
                logger('email not sent to '.$email);
            }
        }
    }
}
