<?php

namespace App\Providers;

use App\Notifications\SubmissionErrorNotification;
use App\Providers\SubmissionSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SubmissionSavedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionSaved $event): void
    {
        if (!$event->isSuccess) {
            \Log::error('Some error occurred for ' . $event->data['email']);
            Mail::raw('Some error occurred, please resubmit!', function ($message) use ($event) {
                $message->to($event->data['email'])
                  ->subject('Submit error');
              });

            return;
        }

        \Log::info('New user created: ' . $event->data['name'] . ', ' . $event->data['email']);
    }
}
