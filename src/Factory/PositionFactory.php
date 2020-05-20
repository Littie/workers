<?php

declare(strict_types=1);

namespace App\Factory;

use App\Positions\Designer;
use App\Positions\Developer;
use App\Positions\Manager;
use App\Positions\Position;
use App\Positions\Tester;

class PositionFactory
{
    /**
     * @param string $name
     *
     * @return \App\Positions\Position|null
     */
    public static function getPosition(string $name): ?Position
    {
        switch ($name) {
            case Position::DESIGNER:
                return new Designer();
                break;
            case Position::DEVELOPER:
                return new Developer();
                break;
            case Position::MANAGER:
                return new Manager();
                break;
            case Position::TESTER:
                return new Tester();
                break;
            default:
                return null;
        }
    }
}
