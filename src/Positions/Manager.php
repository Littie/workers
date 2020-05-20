<?php

declare(strict_types=1);

namespace App\Positions;

use App\Abilities\SetTasks;

class Manager extends AbstractPosition
{
    /**
     * @return void
     */
    protected function initAbilities(): void
    {
        $this->addAbility(new SetTasks());
    }
}
