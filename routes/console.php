<?php

use App\Jobs\CampaignJob;
use App\Jobs\SeedInvoiceJob;
use App\Jobs\WelcomeEvent2025Job;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('campaign', function () {
    CampaignJob::dispatch()->onQueue('default');
})->purpose('campaignJob');

Artisan::command('welcome-event', function () {
    WelcomeEvent2025Job::dispatch()->onQueue('default');
})->purpose('welcome-event');

Artisan::command('seed-invoicet', function () {
    SeedInvoiceJob::dispatch()->onQueue('default');
})->purpose('seed-invoicet');
