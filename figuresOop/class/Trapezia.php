<?php

class Trapezia extends Figures
{
    protected float $b;
    protected float $c;
    protected float $h;

    public function __construct($a, $b, $c, $h)
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
        $this->setH($h);
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        $this->b = $b;
    }

    /**
     * @param float $c
     */
    public function setC(float $c): void
    {
        $this->c = $c;
    }

    /**
     * @param float $h
     */
    public function setH(float $h): void
    {
        $this->h = $h;
    }

    /** Площадь равнобедренной трапеции через основания и высоту
     * @return float
     */
    public function square(): float
    {
        return (($this->a + $this->b) / 2) * $this->h;
    }

    /** P= 2a+b+c
     * @return float
     */
    public function perimeter(): float
    {
        return (2 * $this->a) + $this->b + $this->c;
    }

}