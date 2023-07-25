<?php

namespace App\Services\Auth;

use App\Repository\User\RepositoryInterface as UserRepositoryInterface;

class PermissionService
{

    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {
    }

    public function adminViewPermission(int $userId): bool
    {
        $user = $this->userRepository->getOne($userId);

        return true;
    }
}