<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdministrator', function($user) {
            return $user->role == 'Administrator';
        });

        Gate::define('isDosen', function($user) {
            return $user->role == 'Dosen';
        });

        Gate::define('isScrumMaster', function($user) {
            return $user->role == 'Scrum Master';
        });

        Gate::define('isProductOwner', function($user) {
            return $user->role == 'Product Owner';
        });

        Gate::define('isMahasiswa', function($user) {
            return $user->role == 'Mahasiswa';
        });
    }
}
