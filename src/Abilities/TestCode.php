<?php

declare(strict_types=1);

namespace App\Abilities;

class TestCode implements Ability
{
    /**
     * @return string
     */
    function getName(): string
    {
        return 'Test code';
    }
}
