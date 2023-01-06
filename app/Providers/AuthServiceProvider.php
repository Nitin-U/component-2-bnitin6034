<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

                /* define a admin user role */
                Gate::before(function ($user) {
                    if ($user->role == 'admin') {
                        return true;
                    }
                });

                Gate::define('editor', function($user) {

                    if ($user->role == 'editor') {
                        return true;
                    }
         
                 });
    }
}