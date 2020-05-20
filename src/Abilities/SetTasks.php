<?php

declare(strict_types=1);

namespace App\Abilities;

class SetTasks implements Ability
{
    function getName(): string
    {
        return 'Set tasks';
    }
}
