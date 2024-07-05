<?php

declare(strict_types=1);

function getShapeCornersCount(string ...$shapeNames): void
{
    $shapes['square'] = new Square();
    $shapes['circle'] = new Circle();

    foreach ($shapeNames as $shapeName)
    {
        if (array_key_exists($shapeName, $shapes))
            echo $shapes[$shapeName];
        else
            echo new Undefined($shapeName);
    }
}

getShapeCornersCount('circle', 'aboba', 'square', 'akeka');