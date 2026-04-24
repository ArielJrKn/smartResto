<?php

namespace App\Jobs;

use App\Models\User;
use App\Mail\SendUsersInformations;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;


class SendUsersInformations implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    public $user;
    public $pswd;
    public function __construct(User $user, $pswd)
    {
        $this->user = $user;
        $this->pswd = $pswd;
        
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($user->email)->send(new SendUsersInformationsMail($user, $this->password));

    }
}
