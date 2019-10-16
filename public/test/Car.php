<?php

class Car
{
    public $brand;
    public $color;
    public $maxSpeed;
    private $engine;
    protected $code = 8374;

    public function __construct($brand, $color, $maxSpeed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
    }

    public function start($code)
    {
        if($this->code === $code) {
            $this->engine = true;
            return $this;
        }else{
            echo 'Access closed';
            return $this;
        }
    }

    public function inverse($x) {
        if (!$x) {
            throw new DomainException();
        }
        return 1/$x;
    }

    public function go(){
        if($this->engine) {
            echo 'wiiiiiii_)))';
        }else{
            echo 'Access closed';
        }
    }
}
