<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\PersonalAccessToken;
use App\Models\User;
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
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(PermissionService $permissionService): void
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);

        Gate::define('admin-view', function (User $user) use ($permissionService) {
            return $permissionService->adminViewPermission($user->getAuthIdentifier());
        });
    }
}
