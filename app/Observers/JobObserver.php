<?php

namespace App\Observers;

use App\Models\Historique;
use App\Models\Job;

class JobObserver
{
    /**
     * Handle the Job "created" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function created(Job $job)
    {
        $user=auth()->user()->email;
        Historique::create([
           'evenement'=>'Ajout Jobs',
           'utisateur'=> $user,
        ]);
        // dd('coucou');
        return redirect('/insert');
    }

    /**
     * Handle the Job "updated" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function updated(Job $job)
    {
        $user=auth()->user()->email;
        Historique::create([
           'evenement'=>'Edit Jobs',
           'utisateur'=> $user,
        ]);
        // dd('coucou');


        return redirect('/insert');
    }

    /**
     * Handle the Job "deleted" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function deleted(Job $job)
    {
        
        $user=auth()->user()->email;
        Historique::create([
           'evenement'=>'Delete Jobs',
           'utisateur'=> $user,
        ]);
        // dd('coucou');
        return redirect('/insert');
    }

    /**
     * Handle the Job "restored" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function restored(Job $job)
    {
        

        return redirect('/insert');
    }

    /**
     * Handle the Job "force deleted" event.
     *
     * @param  \App\Models\Job  $job
     * @return void
     */
    public function forceDeleted(Job $job)
    {
        //
    }
}
