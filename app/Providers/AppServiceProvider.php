<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use App\Models\Proposal;
use App\Observers\JobObserver;
use App\Observers\UserObserver;
use App\Observers\ProposalObserver;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Job::observe(JobObserver::class);
        User::observe(UserObserver::class);
        Proposal::observe(ProposalObserver::class);
        // Paginator::useBootstrap();
        Paginator::useBootstrapFive();
       
    }
}
