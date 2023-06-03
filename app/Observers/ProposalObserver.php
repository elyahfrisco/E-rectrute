<?php

namespace App\Observers;

use App\Models\Job;
use App\Models\User;
use App\Models\Proposal;
use App\Mail\ProposalMail;
use Illuminate\Support\Facades\Mail;

class ProposalObserver
{
    /**
     * Handle the Proposal "created" event.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return void
     */
    public function created(Proposal $proposal)
    {
        // dd($proposal->job_id);

        $job=Job::find($proposal->job_id);

        // foreach($job as $job){

        //     $id=$job->user_id;
        // }

        // dd($job->user_id);
        
        $user=User::find($job->user_id);

        // dd($user->email);

        Mail::to($user->email)->send(new ProposalMail());
        redirect('home');
    }

    /**
     * Handle the Proposal "updated" event.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return void
     */
    public function updated(Proposal $proposal)
    {
        //
    }

    /**
     * Handle the Proposal "deleted" event.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return void
     */
    public function deleted(Proposal $proposal)
    {
        //
    }

    /**
     * Handle the Proposal "restored" event.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return void
     */
    public function restored(Proposal $proposal)
    {
        //
    }

    /**
     * Handle the Proposal "force deleted" event.
     *
     * @param  \App\Models\Proposal  $proposal
     * @return void
     */
    public function forceDeleted(Proposal $proposal)
    {
        //
    }
}
