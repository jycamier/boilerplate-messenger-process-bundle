<?php

namespace App\Application\Command\User\Handler;

use App\Application\Command\User\CreateUser;
use App\Domain\Entity\User\User;
use App\Domain\Entity\User\UserRepositoryInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CreateUserHandler implements MessageHandlerInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function __invoke(CreateUser $createUser)
    {
        $user = User::create($createUser->getUuid(), $createUser->getLastName(), $createUser->getFirstName());
        $this->userRepository->add($user);
    }
}
