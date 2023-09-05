<?php

namespace App\Listeners;

use App\Http\Controllers\ContactFormController;
use App\Events\NewUserEvent;
use App\Mail\WelcomeUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class NewUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $admin = "sharonantony2408@gmail.com";
        Mail::to($admin)->send(new WelcomeUserMail());
    }
}
