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
            case 'conversationWithManager':
                return new ConversationWithManager();
                break;
            case 'draw':
                return new Draw();
                break;
            case 'setTasks':
                return new SetTasks();
                break;
            case 'testCode':
                return new TestCode();
                break;
            case 'writeCode':
                return new WriteCode();
                break;
            default:
                return null;
        }
    }
}
