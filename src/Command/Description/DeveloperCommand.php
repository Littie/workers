<?php

declare(strict_types=1);

namespace App\Command\Description;

use App\Command\AbstractDescriptionCommand;
use App\Workers\Position;

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
