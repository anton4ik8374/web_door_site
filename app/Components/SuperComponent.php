<?php

namespace App\Components;

class SuperComponent
{
    protected $name = 'super ';
    protected $property = '';

    public function __construct($attribute)
    {
        $this->name .= $attribute;
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     */
    public function setProperty(string $property): void
    {
        $this->property = $property;
    }

    public function getName() : string
    {
        return $this->name;
    }
}