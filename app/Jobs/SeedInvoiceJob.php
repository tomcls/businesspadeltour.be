<?php

namespace App\Jobs;

use App\Models\EventUser;
use App\Models\Invoice;
use App\Models\UserSession;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SeedInvoiceJob implements ShouldQueue
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
        $eventusers = EventUser::get();
        foreach ($eventusers as $key => $e) {
            if(!empty($e->invoice_id)) {
                $invoice = Invoice::whereId($e->invoice_id)->first();
                $invoice->event_user_id = $e->id;
                $invoice->save();
            }
        }
        $userSessions = UserSession::get();
        foreach ($userSessions as $key => $e) {
            if(!empty($e->invoice_id)) {
                $invoice = Invoice::whereId($e->invoice_id)->first();
                $invoice->user_session_id = $e->id;
                $invoice->save();
            }
        }
    }
}
