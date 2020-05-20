<?php

declare(strict_types=1);

namespace App\Command\Description;

use App\Command\AbstractDescriptionCommand;
use App\Workers\Position;

class TesterCommand extends AbstractDescriptionCommand
{
    /**
     * @return string
     */
    protected function getPosition(): string
    {
        return Position::TESTER;
    }
}
