<?php

declare(strict_types=1);

namespace App\Factory;

use App\Abilities\Ability;

class AbilityFactory
{
    /**
     * @param string $name
     *
     * @return \App\Abilities\Ability|null
     */
    public static function getAbility(string $name): ?Ability
    {
        $class = 'App\\Abilities\\' . $name;

        if (\class_exists($class)) {
            return new $class();
        }

        return null;
    }
}
