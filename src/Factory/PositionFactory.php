<?php

declare(strict_types=1);

namespace App\Factory;

use App\Workers\Position;

class PositionFactory
{
    /**
     * @param string $name
     *
     * @return \App\Workers\Position|null
     */
    public static function getPosition(string $name): ?Position
    {
        $class = 'App\\Workers\\' . $name;

        if (\class_exists($class)) {
            return new $class();
        }

        return null;
    }
}
