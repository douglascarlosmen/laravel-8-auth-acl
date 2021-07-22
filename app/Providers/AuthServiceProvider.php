<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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

        Gate::define('realizar-venda', function (User $user) {

            $user_permissions = $user->load('roles.permissions')->roles->transform(function ($role) {
                return $role->permissions->transform(function ($permission) {
                    return $permission->name;
                });
            });

            return in_array('realizar_venda', $user_permissions->first()->toArray()); // true || false
        });

        Gate::define('alterar-estoque', function (User $user) {

            $user_permissions = $user->load('roles.permissions')->roles->transform(function ($role) {
                return $role->permissions->transform(function ($permission) {
                    return $permission->name;
                });
            });

            return in_array('alterar_estoque', $user_permissions->first()->toArray()); // true || false
        });
    }
}
