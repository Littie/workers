<?php

declare(strict_types=1);

namespace App\Abilities;

class WriteCode implements Ability
{
    /**
     * @return string
     */
    function getName(): string
    {
        return 'Write code';
    }
}
