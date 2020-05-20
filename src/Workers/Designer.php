<?php

declare(strict_types=1);

namespace App\Workers;

use App\Abilities\ConversationWithManager;
use App\Abilities\Draw;

class Designer extends AbstractPosition
{
    /**
     * @return void
     */
    protected function initAbilities(): void
    {
        $this->addAbility(new ConversationWithManager());
        $this->addAbility(new Draw());
    }
}
