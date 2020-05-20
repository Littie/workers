<?php

declare(strict_types=1);

namespace App\Positions;

use App\Abilities\Ability;

interface Position
{
    const DESIGNER = 'designer';
    const DEVELOPER = 'developer';
    const MANAGER = 'manager';
    const TESTER = 'tester';

    /**
     * @param \App\Abilities\Ability $ability
     */
    function addAbility(Ability $ability): void;

    /**
     * @return array
     */
    function getAbilities(): array;

    /**
     * @param \App\Abilities\Ability $ability
     *
     * @return bool
     */
    function hasAbility(Ability $ability): bool;
}
