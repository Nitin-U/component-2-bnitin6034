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

                /* define an admin user role */
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

                /* define a book admin user role */
                 Gate::define('isbookAdmin', function($user) {

                    if ($user->role == 'bookAdmin') {
                        return true;
                    }
         
                 });

                 /* define a cd admin user role */
                 Gate::define('iscdAdmin', function($user) {

                    if ($user->role == 'cdAdmin') {
                        return true;
                    }
         
                 });

                 /* define a game admin user role */
                 Gate::define('isgameAdmin', function($user) {

                    if ($user->role == 'gameAdmin') {
                        return true;
                    }
         
                 });
    }
}