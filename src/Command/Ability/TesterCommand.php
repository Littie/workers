<?php

declare(strict_types=1);

namespace App\Command\Ability;

use App\Command\AbstractAbilityCommand;
use App\Workers\Position;

class TesterCommand extends AbstractAbilityCommand
{
    /**
     * @return string
     */
    protected function getPosition(): string
    {
        return Position::TESTER;
    }
}
