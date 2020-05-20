<?php

declare(strict_types=1);

namespace App\Positions;

use App\Abilities\ConversationWithManager;
use App\Abilities\SetTasks;
use App\Abilities\TestCode;

class Tester extends AbstractPosition
{
    /**
     * @return void
     */
    protected function initAbilities(): void
    {
        $this->addAbility(new TestCode());
        $this->addAbility(new ConversationWithManager());
        $this->addAbility(new SetTasks());
    }
}
