<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class LogSubmission
{
    public function __construct()
    {
        //
    }

    public function handle(SubmissionSaved $event)
    {
        Log::info('Submission saved: ' . $event->submission->name . ' (' . $event->submission->email . ')');
    }
}
