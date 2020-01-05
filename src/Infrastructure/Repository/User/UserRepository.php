<?php


namespace App\Infrastructure\Repository\User;

use App\Domain\Entity\User\User;
use App\Domain\Entity\User\UserRepositoryInterface;
use App\Infrastructure\Repository\AbstractRepository;
use Doctrine\Persistence\ObjectRepository;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    public function getRepository(): ObjectRepository
    {
        $this->entityManager->getRepository(User::class);
    }

    public function add(User $user): void
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
