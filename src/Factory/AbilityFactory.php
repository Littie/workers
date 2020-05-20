<?php

declare(strict_types=1);

namespace App\Factory;

use App\Abilities\Ability;
use App\Abilities\ConversationWithManager;
use App\Abilities\Draw;
use App\Abilities\SetTasks;
use App\Abilities\TestCode;
use App\Abilities\WriteCode;

class AbilityFactory
{
    /**
     * @param string $name
     *
     * @return \App\Abilities\Ability|null
     */
    public static function getAbility(string $name): ?Ability
    {
        switch ($name) {
            case Ability::CONVERSATION_WITH_MANAGER:
                return new ConversationWithManager();
                break;
            case Ability::DRAW:
                return new Draw();
                break;
            case Ability::SET_TASKS:
                return new SetTasks();
                break;
            case Ability::TEST_CODE:
                return new TestCode();
                break;
            case Ability::WRITE_CODE:
                return new WriteCode();
                break;
            default:
                return null;
        }
    }
}
