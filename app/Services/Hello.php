<?php

namespace App\Services;

class Hello
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hi()
    {
        return 'Hello ' . $this->name;
    }
}