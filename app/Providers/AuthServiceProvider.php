<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-page-register', function ($admin) {
//            dd($admin->role);
            if ($admin->role == "1") {

                return true;

            }

            return false;

        });

//        Gate::define('view-page-admin', function ($admin) {
//
//            if ($admin->role == "1" || $admin->role == "0") {
//
//                return true;
//
//            }
//
//            return false;
//
//        });
    }
}
