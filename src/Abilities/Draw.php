<?php

declare(strict_types=1);

namespace App\Abilities;

class Draw implements Ability
{
    /**
     * @return string
     */
    function getName(): string
    {
        return 'Draw';
    }
}
