<?php

namespace Attributes;

use Attribute;

#[Attribute]
class Route
{
    private string $url;
    private string $name;

    public function __construct(string $url, string $name)
    {
        $this->url = $url;
        $this->name = $name;
    }
}