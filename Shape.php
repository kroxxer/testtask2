<?php

declare(strict_types=1);

abstract class Shape
{
    protected string $corners;

    protected string $name;

    public function __construct()
    {
        $this->name = strtolower(get_class($this));
    }

    public function __toString(): string
    {
        return  "$this->name - $this->corners\n";
    }
}