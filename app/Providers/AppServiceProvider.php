<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        // Gate::define('edit-job',function(User $user, Job $job){ // IF YOU NOT LOG IN THE GATE WILL ALWASE BE FALSE IT ALEAYS GIVE 403 IF THERE IS SENARIO YOU DONT WANT THAT YOU CAN BUT User $user=null only then this ->>> return $job->employer->user->is($user); is going to work even if you r not login
        //    return $job->employer->user->is($user); // // ->is() Laravel method that compares two Eloquent models $modelA->is($modelB) Returns true if: Same model type Same primary key (id)
        // });
    }
}
