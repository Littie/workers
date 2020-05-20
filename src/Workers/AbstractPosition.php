<?php

declare(strict_types=1);

namespace App\Workers;

use App\Abilities\Ability;

abstract class AbstractPosition implements Position
{
    /**
     * @var \App\Abilities\Ability[] array
     */
    protected $abilities = [];

    /**
     * AbstractPosition constructor.
     */
    public function __construct()
    {
        $this->initAbilities();
    }

    /**
     * @return void
     */
    protected abstract function initAbilities(): void;

    /**
     * @param \App\Abilities\Ability $ability
     */
    function addAbility(Ability $ability): void
    {
        $this->abilities[] = $ability;
    }

    /**
     * @return array
     */
    function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @param \App\Abilities\Ability $ability
     *
     * @return bool
     */
    public function hasAbility(Ability $ability): bool
    {
        return in_array($ability, $this->abilities);
    }
}
