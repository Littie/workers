<?php

declare(strict_types=1);

namespace App\Abilities;

interface Ability
{
    const CONVERSATION_WITH_MANAGER = 'conversationWithManager';
    const DRAW = 'draw';
    const SET_TASKS = 'setTasks';
    const TEST_CODE = 'testCode';
    const WRITE_CODE = 'writeCode';


    /**
     * @return string
     */
    function getName(): string;
}
