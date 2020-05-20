<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;

abstract class AbstractCommand extends Command
{
    /**
     * @return string
     */
    abstract protected function getPosition(): string;
}
