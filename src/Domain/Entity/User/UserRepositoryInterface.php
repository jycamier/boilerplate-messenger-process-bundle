<?php

namespace App\Domain\Entity\User;

interface UserRepositoryInterface
{
    public function add(User $user): void;
}
