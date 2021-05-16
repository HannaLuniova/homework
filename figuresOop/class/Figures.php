<?php

abstract class Figures
{
    protected float $a;

    public function __construct($a)
    {
        $this->setA($a);
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        $this->a = $a;
    }


}
