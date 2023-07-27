<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\PersonalAccessToken;
use App\Models\User;
use App\Policies\AdminPolicy;
use App\Services\Auth\PermissionService;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Sanctum\Sanctum;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //'admin' => AdminPolicy::class,
    ];
    /**
     * Register any authentication / authorization services.
     */
    public function boot(PermissionService $permissionService): void
    {
        $this->registerPolicies();
        Gate::define('admin', [AdminPolicy::class, 'view']);

        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
