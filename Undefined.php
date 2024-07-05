<?php

declare(strict_types=1);

class Undefined extends Shape
{
    public function __construct(string $name)
    {
        parent::__construct();
        $this->name = $name;
        $this->corners = "not defined";
    }
}