<?php

declare(strict_types=1);

namespace App\Workers;

use App\Abilities\ConversationWithManager;
use App\Abilities\TestCode;
use App\Abilities\WriteCode;

class Developer extends AbstractPosition
{
    /**
     * @return void
     */
    protected function initAbilities(): void
    {
        $this->addAbility(new WriteCode());
        $this->addAbility(new TestCode());
        $this->addAbility(new ConversationWithManager());
    }
}
