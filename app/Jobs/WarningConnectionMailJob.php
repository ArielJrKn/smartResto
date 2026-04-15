<?php

namespace App\Jobs;

use App\Mail\WarningConnectionMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;


class WarningConnectionMailJob implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    public $user;
    public function __construct($user)
    {
        $this->user = $user;
        
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->user->email)->send(new WarningConnectionMail($this->user));
    }
}
