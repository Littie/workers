<?php

declare(strict_types=1);

namespace App\Command\Ability;

use App\Command\AbstractAbilityCommand;
use App\Positions\Position;

class DesignerCommand extends AbstractAbilityCommand
{
    /**
     * @return string
     */
    protected function getPosition(): string
    {
        return Position::DESIGNER;
    }
}
