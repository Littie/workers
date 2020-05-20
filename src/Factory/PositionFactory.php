<?php

declare(strict_types=1);

namespace App\Factory;

use App\Positions\Position;

class PositionFactory
{
    /**
     * @param string $name
     *
     * @return \App\Positions\Position|null
     */
    public static function getPosition(string $name): ?Position
    {
        $class = 'App\\Positions\\' . $name;

        if (\class_exists($class)) {
            return new $class();
        }

        return null;
    }
}
