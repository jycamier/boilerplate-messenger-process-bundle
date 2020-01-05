<?php

namespace App\Application\Command\Handler;

use App\Application\Command\CreateUser;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CreateUserHandler implements MessageHandlerInterface
{
    public function __invoke(CreateUser $createUser)
    {
        // TODO: Implement __invoke() method.
    }
}
