<?php

declare(strict_types=1);

namespace App\Command\Description;

use App\Command\AbstractDescriptionCommand;
use App\Positions\Position;

class DeveloperCommand extends AbstractDescriptionCommand
{
    /**
     * @return string
     */
    public function getPosition(): string
    {
        return Position::DEVELOPER;
    }
}
