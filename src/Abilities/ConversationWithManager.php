<?php

declare(strict_types=1);

namespace App\Abilities;

class ConversationWithManager implements Ability
{
    /**
     * @return string
     */
    function getName(): string
    {
        return 'Conversation with manager';
    }
}
