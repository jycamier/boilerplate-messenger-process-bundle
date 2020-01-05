in<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Sidus\BaseBundle\SidusBaseBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    CleverAge\ProcessBundle\CleverAgeProcessBundle::class => ['all' => true],
    Jycamier\MessengerProcessBundle\JycamierMessengerProcessBundle::class => ['all' => true],
    Nelmio\Alice\Bridge\Symfony\NelmioAliceBundle::class => ['dev' => true, 'test' => true],
    Jycamier\AliceProcessBundle\JycamierAliceProcessBundle::class => ['all' => true],
    Jycamier\ConsoleCommandProcessBundle\ConsoleCommandProcessBundle::class => ['all' => true],
];
