<?php

namespace App\Jobs;

use App\Models\EventUser;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;

class WelcomeEvent2025Job implements ShouldQueue
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
        $cpt = 0;
        // $users = User::get();
        $users = User::whereLang('fr')->get();

       // logger($users);
        foreach ($users as $key => $user) {

            $eventuser = EventUser::whereUserId($user->id)->first();
            logger($eventuser);
            if ($eventuser && ($eventuser->event_id == 2 || $eventuser->event_id == 4) ) {

                // player one
                $template_content = array(
                    array(
                        'name' => 'url',
                        'content' => 'https://businesspadeltour.be/' . $user->lang . '/welcome-event?id=' . $user->id
                    )
                );
                $to = [];
                $email = trim(strtolower($user->email));
                array_push($to, [
                    "email" =>  $email,
                    "type" => "to"
                ]);

                $message = [
                    "from_email" => "info@businesspadeltour.be",
                    'from_name'  => 'Vertuoza padel tour',
                    "subject" => 'Kick off Vertuoza Padel Tour 2025',
                    "to" => $to,
                    "headers" => ["Reply-To" => "info@businesspadeltour.be"],
                    'global_merge_vars' => $template_content
                ];
                $cpt++;
                try {
                    logger('mail sent to ' . $email . " total = " . $cpt);
                    // Log::alert('Player 1 email sent '.App::currentLocale());
                    $mailchimp->messages->sendTemplate([
                        "template_name" => "vertuoza_padel_event_beready_" . $user->lang,
                        "template_content" => $template_content,
                        "message" => $message,
                    ]);
                    // logger($response);
                    logger($cpt);
                } catch (\Throwable $th) {
                    //throw $th;
                    logger('email not sent to ' . $email);
                }
            }
        }
    }
}
