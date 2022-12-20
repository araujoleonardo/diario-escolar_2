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

        // admin
        Gate::define('admin', function (User $user) {
            return $user->user_profile === 'admin';
        });

        // professor
        Gate::define('professor', function (User $user) {
            return $user->user_profile === 'professor';
        });

        // aluno
        Gate::define('aluno', function (User $user) {
            return $user->user_profile === 'aluno';
        });

        // admin_e_professor
        Gate::define('admin_e_professor', function (User $user) {
            return $user->user_profile === 'admin' or $user->user_profile === 'professor';
        });
    }
}
