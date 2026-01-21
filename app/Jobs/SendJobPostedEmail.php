<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Auth;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

class SendJobPostedEmail implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $jobListing, public $email)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //NOTE there is no access to session here thats why we pass the $email
        Mail::to($this->email)->queue(
        new JobPosted($this->jobListing)
    );
    }
}
