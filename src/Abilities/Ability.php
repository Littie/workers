<?php

declare(strict_types=1);

namespace App\Abilities;

interface Ability
{
    /**
     * @return string
     */
    function getName(): string;
}
