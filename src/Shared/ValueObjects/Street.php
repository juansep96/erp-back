<?php

namespace Src\Shared\ValueObjects;

readonly class Street
{
    private string $value;

    public function __construct(String $value)
    {
        $this->value = $value;
    }

    public function getValue(): String
    {
        return $this->value;
    }
}
